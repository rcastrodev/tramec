@extends('paginas.partials.app')
@section('content')
@isset($products)
    <section class="pb-5 position-relative">
        <div class="position-absolute bg-light w-100 d-sm-none d-md-block" style="height: 300px;"></div>
        <h2 class="text-center fw-bold mb-5 text-uppercase text-primary font-size-26">Productos</h2>
        <div class="container row mx-auto mt-5">
            @if (count($products))
                @foreach ($products as $p)
                    <div class="col-sm-12 col-md-3 mb-3">
                        @include('paginas.partials.producto', ['p' => $p])
                    </div>
                @endforeach
            @else
                <h5 class="py-5 text-center">No tenemos productos cargados</h5>
            @endif
        </div>
    </section>
@endisset
@endsection
@push('scripts')
@endpush
