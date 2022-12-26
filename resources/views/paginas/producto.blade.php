@extends('paginas.partials.app')
@section('content')
@isset($product)
@if (Storage::disk('custom')->exists($product->img2))
    <div class="hero" style="background-image: url({{ asset($product->img2) }}); background-position: center; background-size: 100% 100%; height:460px;"></div>   
@endif
<div class="container">
    <div class="d-flex justify-content-between contenedor-producto" @if (Storage::disk('custom')->exists($product->img2)) style="position: relative; bottom: 150px;" @endif>
        <div class="card card-producto" style="min-height: 400px; max-width: 300px;">
            <div class="position-relative">  
                @if (Storage::disk('custom')->exists($product->img1))
                    <img src="{{ asset($product->img1) }}" class="img-fluid img-product" >
                @else
                    <img src="{{ asset('images/default.jpg') }}" class="img-fluid img-product">
                @endif
            </div>
            <div class="card-body bg-white">
                <p class="card-text mb-0 fw-bold text-primary text-center fw-bold font-size-18 d-block">{{$product->name}}</p>
            </div>
        </div>
        <div class="descripcion-producto" @if (Storage::disk('custom')->exists($product->img2)) style="margin-top:200px;" @else style="margin-top:100px;" @endif >
            <div class="mb-5">{!! $product->description !!}</div>
            <a href="{{ route('contacto') }}" class="btn bg-primary text-white fw-bold text-uppercase py-2 px-4 font-size-16" style="border-radius: 0;">consultar</a>
            <div class="mt-sm-2 mt-md-5 table-responsive">
                <table class="table mt-5 font-size-15 text-center tabla-producto">
                    <tr class="text-uppercase bg-primary text-white ">
                        <th class="fw-light" style="vertical-align: middle;">c&oacute;digo</th>
                        <th class="fw-light" style="vertical-align: middle;">normas</th>
                        <th class="fw-light" style="vertical-align: middle;">pago</th>
                        <th class="fw-light" style="vertical-align: middle;">di&aacute;metro <br> perno</th>
                        <th class="fw-light" style="vertical-align: middle;">espesor <br> placas</th>
                        <th class="fw-light" style="vertical-align: middle;">largo <br> perno</th>
                        <th class="fw-light" style="vertical-align: middle;">carga <br> rotura min</th>
                        <th class="fw-light" style="vertical-align: middle;">peso <br> por metro</th>
                    </tr>
                    <tr class="text-center text-white" style="background-color:#7199B3;">
                        <td>CADENAS</td>
                        <td>IRAM ISO</td>
                        <td>P mm</td>
                        <td>DP mm</td>
                        <td>W mm</td>
                        <td>Tp mm</td>
                        <td>Por Fila Kg</td>
                        <td>Por Fila Kg/m</td>
                    </tr>
                    @foreach ($product->variableProducts as $item)
                        <tr>
                            <td>{{$item->code}}</td>
                            <td>{{$item->rules}}</td>
                            <td>{{$item->step}}</td>
                            <td>{{$item->diameter}}</td>
                            <td>{{$item->thickness}}</td>
                            <td>{{$item->long}}</td>
                            <td>{{$item->load}}</td>
                            <td>{{$item->weight}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endisset
@endsection
@push('scripts')
    <script src="{{ asset('js/axios.js') }}"></script>
@endpush
