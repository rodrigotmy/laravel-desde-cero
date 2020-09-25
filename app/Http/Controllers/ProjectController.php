<?php

namespace App\Http\Controllers;

use App\Project;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Events\ProjectSaved;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with('category')->latest()->paginate(6)
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        $project = new Project( $request->validated() );
        $project->image = $request->file('image')->store('images');
        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        if ( $request->hasFile('image') ) {
            Storage::delete($project->image);
            $project->fill( $request->validated() );
            $project->image = $request->file('image')->store('images');
            $project->save();

            ProjectSaved::dispatch($project);

        } else {
            $project->update( array_filter( $request->validated() ));
        }

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito');
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito');
    }

}