
			@csrf
			<!-- -->
			<div class="form-group">
			<label for="title">Titulo del Proyecto</label>
			<input class=" form-control border-0 bg-light shadow-sm"
			id="title"
			type="text"
			name="title"
			value="{{ old('title', $projects->title) }}">
			</div>
			<!-- -->
			<div class="form-group">
			<label>URL del Proyecto</label>
			<input class=" form-control border-0 bg-light shadow-sm"
			id="url"
			type="text"
			name="url"
			value="{{ old('url', $projects->url) }}">
			</div>
			<!-- -->
			<div class="form-group">
				<label for="description">Descripcion del Proyecto</label>
				<textarea class="form-control border-0 bg-light shadow-sm"
					name="description" >
					{{ old('description', $projects->description) }}
				</textarea>
			</div>
			<!-- -->
			<button class="btn btn-success btn-lg btn-block">
				{{ $btnText }}
			</button>
			<a  class="btn btn-link btn-lg btn-block"
			href="{{ route('projects.index') }}">
			Cancelar
			</a>