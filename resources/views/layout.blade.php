<!DOCTYPE html>
<html>
<head>
	<!--Es buena practica que la vistas tengan la minima logica posible solo se usa para imprimir,hacer loops y esctructuras de control -->
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script type="text/javascript" src="{{ mix('js/app.js') }}" defer=""></script>
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between ">
		<header>
			@include('partials/nav')
			@include('partials.session-status')
		</header>
		<main class="py-5">
			@yield('content')
		</main>

		<footer class="bg-white text-black-50 text-center py-3 shadow">
			{{ config('app.name') }} | Copyright {{ date('Y-m-d')}}
		</footer>
	</div>
</body>