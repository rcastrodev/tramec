<header class="header bg-primary py-2 d-sm-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 d-flex align-items-center justify-content-between flex-wrap text-dark">
                <address class="mb-xs-2 mb-md-0 text-light font-size-13">{{ $data->address }}</address>
                <span class="px-2 text-light">|</span>
                <a href="mailto:{{ $data->email }}" class="mb-xs-2 mb-md-0 text-light text-decoration-none font-size-13">{{ $data->email }}</a>
                <span class="px-2 text-light">|</span>
                @isset($data->phone1)
                    <span class="mb-xs-2 mb-md-0">
                        @php $phone = Str::of($data->phone1)->explode('|') @endphp
                        @if (count($phone) == 2)
                            <a href="tel:{{$phone[0]}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $phone[1] }}</a>
                        @else 
                            <a href="tel:{{$data->phone1}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $data->phone1 }}</a>
                        @endif
                    </span>
                    <span class="text-white">/</span>           
                @endisset
                @isset($data->phone2)
                    <span class="mb-xs-2 mb-md-0">
                        @php $phone2 = Str::of($data->phone2)->explode('|') @endphp
                        @if (count($phone2) == 2)
                            <a href="tel:{{$phone2[0]}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $phone2[1] }}</a>
                        @else 
                            <a href="tel:{{$data->phone2}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $data->phone2 }}</a>
                        @endif
                    </span>
                    <span class="text-white">/</span>            
                @endisset
                @isset($data->phone3)
                    <span class="mb-xs-2 mb-md-0">
                        @php $phone3 = Str::of($data->phone3)->explode('|') @endphp
                        @if (count($phone3) == 2)
                            <a href="tel:{{$phone3[0]}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $phone3[1] }}</a>
                        @else 
                            <a href="tel:{{$data->phone3}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $data->phone3 }}</a>
                        @endif
                    </span>
                    <span class="text-white">/</span>  
                @endisset
                @isset($data->phone4)
                    <span class="mb-xs-2 mb-md-0">
                        @php $phone4 = Str::of($data->phone4)->explode('|') @endphp
                        @if (count($phone4) == 2)
                            <a href="tel:{{$phone4[0]}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $phone4[1] }}</a>
                        @else 
                            <a href="tel:{{$data->phone4}}" class="text-white text-decoration-none font-size-13 fw-bold">{{ $data->phone4 }}</a>
                        @endif
                    </span>                   
                @endisset
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        @if (Storage::disk('custom')->exists($data->logo_header))
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset($data->logo_header) }}" class="img-fluid logo-header">
            </a>       
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end text-uppercase" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item @if(Request::is('/')) position-relative @endif">
                    <a class="nav-link @if(Request::is('/')) active @endif" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item @if(Request::is('empresa')) position-relative @endif">
                    <a class="nav-link @if(Request::is('empresa')) active @endif" href="{{ route('empresa') }}">Empresa</a>
                </li>
                
                <li class="nav-item @if(Request::is('categoria/*') ||  Request::is('productos') || Request::is('productos/*') || Request::is('producto/*')) position-relative @endif">
                    <a class="nav-link @if(Request::is('categoria/*') || Request::is('productos') || Request::is('productos/*') || Request::is('producto/*')) active @endif" href="{{ route('productos') }}">Productos</a>
                </li>
                <li class="nav-item @if(Request::is('calidad')) position-relative @endif">
                    <a class="nav-link @if(Request::is('calidad')) active @endif" href="{{ route('calidad') }}">Calidad</a>
                </li>
                <li class="nav-item @if(Request::is('laboratorio')) position-relative @endif">
                    <a class="nav-link @if(Request::is('laboratorio')) active @endif" href="{{ route('laboratorio') }}">Laboratorio</a>
                </li>
                <li class="nav-item @if(Request::is('solicitud-de-presupuesto')) position-relative @endif">
                    <a class="nav-link @if(Request::is('solicitud-de-presupuesto')) active @endif" href="{{ route('solicitud-de-presupuesto') }}">Solicitud de presupuesto</a>
                </li>
                <li class="nav-item @if(Request::is('contacto')) position-relative @endif">
                    <a class="nav-link @if(Request::is('contacto')) active @endif" href="{{ route('contacto') }}" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>  
