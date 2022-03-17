
@extends('layout')

@section('title','projects')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">


				@include('partials.validation-errors')

				<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{ route('projects.update',$projects) }}">
					 @method('PATCH')
					<h1 class="display-4">@lang('Edit Project')</h1>
					@include('projects._form', ['btnText' => 'Actualizar'])
					<hr>
				</form>
		</div>
	</div>
</div>
@endsection
