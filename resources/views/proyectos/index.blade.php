@extends('layout.main')
@section('title', 'Inicio')
@section('content')
<main>
	<div class="row">
		<div class="col s12 m6">
		<div class="card medium">
				<div class="card-image">
					<img src="{{url('assets/images/image.jpg')}}">
					<span class="card-title">Card Title</span>
				</div>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
		<div class="card medium">
				<div class="card-image">
					<img src="{{url('assets/images/image.jpg')}}">
					<span class="card-title">Card Title</span>
				</div>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
		<div class="card medium">
				<div class="card-image">
					<img src="{{url('assets/images/image.jpg')}}">
					<span class="card-title">Card Title</span>
				</div>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>

			<div class="col s12 m6">
		<div class="card medium">
				<div class="card-image">
					<img src="{{url('assets/images/image2.jpg')}}">
					<span class="card-title">Card Title</span>
				</div>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.</p>
					</div>
					<div class="card-action">
						<a href="#">This is a link</a>
					</div>
				</div>
			</div>
		</div>
	</main>

	@endsection