@extends('templates.main')
	@section('content')
		@include('default.header')

		<div class="container">
			<section class="section-text-not-found  twelve columns">
				<h3>Upss! Página no encontrada</h3>
				<article>
					<p>
						La página que estás buscando no se encuentra, o tal vez cambio de dirección. Si crees que esto se trata de una equivocación, por favor, no dudes en contactarnos informándonos de este error.
					</p>
				</article>
			</section> 
		</div>

	@include('default.footer')
	@endsection