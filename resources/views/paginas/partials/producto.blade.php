<a href="{{ route('producto', ['product'=>$p->id]) }}" class="d-block card producto text-decoration-none" style="min-height: 400px;">
    <div class="position-relative">  
        @if (Storage::disk('custom')->exists($p->img1))
            <img src="{{ asset($p->img1) }}" class="img-fluid img-product" >
        @else
            <img src="{{ asset('images/default.jpg') }}" class="img-fluid img-product">
        @endif
    </div>
    <div class="card-body bg-white">
        <p class="card-text mb-0 fw-bold text-primary text-center fw-bold font-size-18 d-block">{{$p->name}}</p>
    </div>
</a>