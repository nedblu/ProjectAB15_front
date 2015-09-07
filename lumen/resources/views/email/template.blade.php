@extends('templates.main')
	@section('customStyles')
		{!! Html::style('css/email.css') !!}
	@endsection
	@section('content')
		<div>
			<div><img src="alphabetalogo"> <span>mail logo</span></div>
			<div>
				<h2>cabezera</h2>
				<p>
					<span>nombre del enviador</span>
				</p>
			</div>
		</div>
	@endsection