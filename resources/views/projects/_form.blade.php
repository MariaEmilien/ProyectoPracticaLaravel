		@csrf
		<label>
			Titulo del Proyecto <br>
				<input type="text" name="title" value="{{ old('title',  $project->title )}}">
		</label>
		<br>
		<label>
			URL del Proyecto <br>
				<input type="text" name="url" value="{{ old('url',  $project->url )}}">
		</label>
		<br>
		<label>
			Descripción del Proyecto <br>
				<textarea name="description" value="{{ old('description',  $project->description )}}"></textarea> 
		</label>
		<br>

		<button>{{ $btnText }}</button>