@extends('paginas.partials.app')
@section('content')
@isset($sliders)
	@if (count($sliders))
		<div id="sliderHeroEmpresa" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($sliders as $k => $v)
					<button type="button" data-bs-target="#sliderHeroEmpresa" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{ $k}}"></button>					
				@endforeach
			</div>
			<div class="carousel-inner">
				@foreach ($sliders as $k => $v)
					<div class="carousel-item @if(!$k) active @endif" style="background-image: url({{$v->image}})"></div>				
				@endforeach
			</div>
		</div>		
	@endif
@endisset
@isset($section2)
	<div class="py-5" style="background-color: #eaf0f3ab;">
		<div class="container text-center">
			<h3 class="text-primary fw-bold font-size-26 mb-4">{{$section2->content_1}}</h3>
			<p class="font-size-21">{{$section2->content_2}}</p>
		</div>
	</div>
@endisset
@if (isset($section3) || isset($section4))
<section class="py-sm-2 py-md-5">
	<div class="container mx-auto">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				@if (count($section3))
					<div class="row">
						@foreach ($section3 as $s3)
							<div class="col-sm-12 col-md-4 mb-sm-2 mb-md-5">
								<div class="destacado">{{$s3->content_1}}</div>
							</div>
							<div class="col-sm-12 col-md-8 mb-sm-2 mb-md-5">
								<div class="texto-destacado fw-light">{{$s3->content_2}}</div>
							</div>
						@endforeach
					</div>		
				@endif
			</div>
			<div class="col-sm-12 col-md-6 font-size-18 ul-empresa" style="color:#707070;">{!!$section4->content_1!!}</div>
		</div>
	</div>
</section>
@endif
@endsection