<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;
use App\Http\Requests\SaveMusicRequest;

class MusicController extends Controller
{

    public function index()
    {
        $projectMusics = Music::orderBy('created_at', 'DESC')->get();
        return view('musics.index', compact('projectMusics'));
    }

    public function show(Music $music)
    {
        return view('musics.show', [
            'projectMusics' => $music
        ]);
    }

    public function create()
    {
        return view('musics.create', [
            'projectMusics' => new Music]);
    }

    public function store(SaveMusicRequest $request)
    {
        Music::create( $request->validated() );
        return redirect()->route('musics.index')->with('status', 'Creado con exito');
    }

    public function edit(Music $music)
    {
        return view('musics.edit', [
            'projectMusics' => $music
        ]);
    }

    public function update(Music $music, SaveMusicRequest $request)
    {
        $music->update( $request->validated() );
        return redirect()->route('musics.show', $music)->with('status', 'Actualizado con exito');
    }

    public function destroy(Music $music)
    {
        $music->delete();
        return redirect()->route('musics.index')->with('status', 'Eliminado con exito');
    }

}
