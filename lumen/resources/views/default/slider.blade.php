<section>
	@if($banners)
	<div class="flexslider">
		<ul class="slides">

		@foreach($banners as $slide)
			<li>
				@if($slide->uri)
					<a href="{!! url( $slide->uri ) !!}" title="{!! $slide->title !!}" >{!! Html::image('content/slide-show/caption_' . $slide->image, $slide->title) !!}</a>
					<p class="flex-caption">{!! $slide->title !!}</p>
				@else
					{!! Html::image('content/slide-show/caption_' . $slide->image, $slide->title) !!}
					<p class="flex-caption">{!! $slide->title !!}</p>
				@endif
				
			</li>
		@endforeach

		</ul>
		
	</div>
	@endif

	<div id="pintura">
	</div>
</section>