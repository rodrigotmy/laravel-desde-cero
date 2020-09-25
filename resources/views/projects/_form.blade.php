@csrf
@if($project->image)
	<img class="card-img-top mb-2"
		style="height: 350px; object-fit: cover"
		src="/storage/{{ $project->image }}"
		alt="{{ $project->title }}">
@endif

<div class="custom-file mb-2">
  <input name="image" type="file" class="custom-file-input" id="customFileLang" lang="es">
  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
</div>

<div class="form-group">
	<label for="category_id">Categoría del proyecto</label>
	<select
		name="category_id"
		id="category_id"
		class="form-control border-0 bg-light shadow-sm"
	>
		<option value="">Seleccione</option>
		@foreach($categories as $id => $name)
			<option value="{{ $id }}"
				@if($id == old('category_id', $project->category_id)) selected @endif
			>{{ $name }}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="title">Título del proyecto</label>
	<input class="form-control border-0 bg-light shadow-sm"
		id="title" name="title"
		type="text"{{--  placeholder="Escribe aquí el titulo..." --}}
		value="{{ old('title', $project->title) }}">
</div>
<div class="form-group">
	<label for="url">URL del proyecto</label>
	<input class="form-control border-0 bg-light shadow-sm"
		id="url" name="url"
		type="text" {{-- placeholder="Escribe aquí la url..." --}}
		value="{{ old('url', $project->url) }}">
</div>
<div class="form-group">
	<label for="description">Descripción del proyecto</label>
	<textarea class="form-control border-0 bg-light shadow-sm"
		id="description" name="description"
		type="text">{{ old('description', $project->description) }}</textarea>
</div>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block"
	href="{{ route('projects.index') }}">Cancelar</a>