@extends('layout')

@section('title','About')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/abduction.svg" alt="Desarrollo Web">
		</div>
		<div class="col-12 col-lg-6">
	<h1 class="displey-4 text-primary">@lang('About')</h1>
	<p class="lead text-secondary">
		«Somos lo que hacemos constantemente. Es por esto que la excelencia no es un acto, sino un hábito»: Aristóteles
	</p>
	<a class="btn btn-success btn-lg btn-block" href="{{ route('contact')}} ">Contactame</a>
	<a class="btn btn-success btn-lg btn-block" href="{{ route('projects.index')}} ">Portafolio</a>
		</div>
	</div>
</div>
@endsection