@extends('layout')

@section('title','projects')

@section('content')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center ">
			<h1 class="display-4 mb-0">@lang('Projects')</h1>
			@auth
				<a class=" btn btn-success"
				href="{{ route('projects.create') }}">
				Crear Proyecto
				</a>
			@endauth
		</div>
		<hr>
		<p class="lead text-secondary">Proyectos realizados</p>
	<ul class="list-group">
			 @forelse ($projects as $project )
				 <li class="list-group-item border-0 mb-3 shadow-sm">
				 	<a  class="text-secondary d-flex justify-content-between aling-item-center" href="{{ route('projects.show', $project)}}">
				 		<span class="font-weight-bold">
				 			{{ $project->title }}
				 		</span>
				 		<span class="text-black-50">
				 			{{ $project->created_at->format('d/m/Y') }}
				 		</span>
				 	</a>
				 </li>
				 @empty
				 	<li class="list-group-item border-0 mb-3 shadow-sm">
				 	No hay proyectos
				 	</li>
			 	@endforelse
			 <span>
			 	{{ $projects->links() }}
			</span>
		</ul>
	</div>
@endsection
