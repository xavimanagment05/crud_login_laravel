@extends('layout')

@section('title', 'Portfolio | ' . $projects->title)

@section('content')
<div class="bg-white p-5 shadow rounded">
<h1>{{ $projects->title }}</h1>

	<p class="text-secondary">
		{{ $projects->url }}
	</p>
	<p class="text-secondary">
		{{ $projects->description }}
	</p>
	<p class="text-black-50">
		{{ $projects->created_at->diffForHumans() }}
	</p>
	<div class="d-flex justify-content-between align-items-center">

	<a  class="btn btn-success btn-lg"
	href="{{ route('projects.index') }}">
	Regresar
	</a>
		@auth
			<div class="btn-group">
				<a class="btn btn-success btn-lg"
				href="{{ route('projects.edit', $projects)}}">
				Editar
				</a>
				<a  class="btn btn-danger btn-lg " href="#"
				onclick="document.getElementById('delete-project').submit()">
				Eliminar
				</a>
			</div>

				<form class="d-none" id="delete-project" method="POST"
				action="{{ route('projects.destroy', $projects)}}">
					@csrf @method('DELETE')

				</form>
		@endauth
	</div>
</div>
@endsection