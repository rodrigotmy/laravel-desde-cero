@csrf
<label>
	Título del genero <br>
	<input type="text" name="title" value="{{ old('title', $projectMusics->title) }}">
</label>
<br><br>
<label>
	URL del genero <br>
	<input type="text" name="url" value="{{ old('url', $projectMusics->url) }}">
</label>
<br><br>
<label>
	Descripción del genero <br>
	<textarea name="description">{{ old('description', $projectMusics->description) }}</textarea>
</label>
<br><br>
<button>{{ $btnText }}</button>