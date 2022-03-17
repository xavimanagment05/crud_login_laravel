@extends('layout')

@section('title','Home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4" src="/img/moonwalker.svg" alt="Desarrollo Web">
		</div>
		<div class="col-12 col-lg-6">
	<h1 class="displey-4 text-primary">@lang('Home')</h1>
	<p class="">El espacio físico es el lugar donde se encuentran los objetos y en el que los eventos que ocurren tienen una posición y dirección relativas.​ El espacio físico es habitualmente concebido con tres dimensiones lineales, aunque los físicos modernos usualmente lo consideran, con el tiempo, como una parte de un infinito ...</p>
	<a class="btn btn-success btn-lg btn-block" href="{{ route('contact')}} ">Contactame</a>
	<a class="btn btn-success btn-lg btn-block" href="{{ route('projects.index')}} ">Portafolio</a>
	@auth
		{{ auth()->user()->name }}
	@endauth
		</div>
	</div>
</div>
@endsection