@extends('paginas.partials.app')
@section('content')
@isset($section1s)
	@if (count($section1s))
		<div id="sliderHero" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($section1s as $k => $v)
					<button type="button" data-bs-target="#sliderHero" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>
				@endforeach
			</div>
			<div class="carousel-inner">
				@foreach ($section1s as $k => $v)
					<div class="carousel-item position-relative @if(!$k) active @endif" style="background-image: url({{ asset($v->image) }})">
						<img src="{{ asset($v->content_1) }}" class="position-absolute d-sm-none d-md-block" width="235" height="79" style="top:20px; right: 120px;">
						<div class="carousel-caption text-start">
							<h5 class="text-uppercase text-white fw-bold font-size-41">{!! $v->content_2 !!}</h5>
							<h2 class="text-white font-size-24 fw-light mb-5">{{ $v->content_3 }}</h2>
							<a href="{{ route('contacto') }}" class="text-uppercase btn bg-primary text-white fw-bold py-2 px-4 font-size-16" style="border-radius: 0;">m&aacute;s informaci&oacute;n</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>		
	@endif
@endisset
@isset($products)
	@if (count($products))
		<section class="py-5  position-relative">
			<div class="position-absolute bg-light w-100 d-sm-none d-md-block" style="height: 300px; top: 0;"></div>
			<h2 class="text-center fw-bold mb-5 text-uppercase text-primary font-size-26">Productos</h2>
			<div class="container row mx-auto mt-5">
				@foreach ($products as $p)
					<div class="col-sm-12 col-md-3 mb-3">
						@include('paginas.partials.producto', ['p' => $p])
					</div>
				@endforeach
			</div>
		</section>
	@endif
@endisset
@isset($section2)
<section id="section2" class="mb-5">
	<div class="row align-items-center">
		<div class="col-sm-12 col-md-6">
			<img src="{{ asset($section2->image) }}" alt="" class="img-fluid w-100">
		</div>
		<div class="col-sm-12 col-md-5 ps-xs-0 ps-md-4 text-sm-center text-md-start mt-sm-3 mt-md-0">
			<h5 class="fw-bold mb-4 text-primary font-size-26">{{$section2->content_1}}</h5>
			<div class="fw-normal mb-4" style="line-height: 35px; color:#333333;">
				{!! $section2->content_2 !!}
			</div>
			<a href="{{ route('contacto') }}" class="btn bg-primary text-white py-2 px-4 text-uppercase font-size-16 fw-bold" style="border-radius: 0;">m&aacute;s informaci&oacute;n</a>
		</div>
	</div>
</section>
@endisset
@endsection