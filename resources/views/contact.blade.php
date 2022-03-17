@extends('layout')

@section('title','Contact')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

			<form class="bg-white shadow rounded py-3 px-4"
		method="POST"
		action="{{ route('messages.store') }}">
		<!--Siempre agregar esta directiva para formularios-->
		@csrf

		<h1 class="display-4">{{ __('Contact') }}</h1>
		<hr>
		<div class="form-group">
		<label for="name"></label>
		<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
		type="text"
		id="name"
		name="name"
		placeholder="Nombre ...."
		value="{{old('name')}}" ><br>
		@error('name')
			<span class="invalid-feedback" role="alert">
				<strong> {{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!-- ------------------------------------------------------ -->
		<div class="form-group">
		<label for="email"></label>
		<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
		type="text"
		id="email"
		name="email"
		placeholder="Email ...."
		value="{{old('email')}}" ><br>
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong> {{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!-- ---------------------------------------------------- -->
		<div class="form-group">
		<label for="subject"></label>
		<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
		type="text"
		id="subject"
		name="subject"
		placeholder="Asunto ...."
		value="{{old('subject')}}" ><br>
		@error('subject')
			<span class="invalid-feedback" role="alert">
				<strong> {{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!-- ---------------------------------------------------- -->
		<div class="form-group">
		<label for="content"></label>
		<input class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
		type="text"
		id="content"
		name="content"
		placeholder="Mensaje ...."
		value="{{old('content')}}" ><br>
		@error('content')
			<span class="invalid-feedback" role="alert">
				<strong> {{ $message }}</strong>
			</span>
		@enderror
		</div>
		<!-- ---------------------------------------------------- -->
		<button class=" btn btn-success btn-lg btn-block">
		@lang('Send')
		</button>
			</form>

			</div>
		</div>
	</div>
@endsection