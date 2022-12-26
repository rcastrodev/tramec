@extends('paginas.partials.app')
@section('content')
<section class="py-sm-2 py-md-5">
    <div class="container">
        <div class="row">
            @if(Storage::disk('custom')->exists($section1->image))
                <div class="col-sm-12 col-md-6 mb-sm-4 mb-md-0">
                    <img src="{{ asset($section1->image) }}" class="w-100"> 
                </div>
            @endif
            <div class="col-sm-12 col-md-6">
                <h3 class="text-primary fw-bold mb-4 font-size-26">{{ $section1->content_1 }}</h3>
                <div class="mb-4 font-size-15">{!!$section1->content_2!!}</div>
                @if(Storage::disk('custom')->exists($section1->content_4))
                    <img src="{{ asset($section1->content_3) }}" width="241" height="81"> 
                @endif
                <ul class="w-100 mt-4 p-0 ul-calidad">
                    @foreach ($section2 as $s2)
                        <li class="d-flex justify-content-between py-2">
                            <span class="text-primary fw-bold">{{ $s2->content_1 }}</span>
                            @if ($s2->image)
                                <a href="{{ route('archivo-calidad', ['id'=>$s2->id]) }}">
                                    <i class="fas fa-file-download" style="font-size: 20px; color: #1D2A5E;
                                }"></i>
                                </a> 
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div> 
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script src="{{ asset('js/axios.js') }}"></script>
@endpush
