<footer class="py-sm-3 py-md-5 font-size-14 text-sm-center text-md-start bg-primary">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-4 d-sm-none d-md-block">
                <h6 class="text-uppercase text-white font-weight-600">secciones</h6>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('index') }}" class="d-block text-uppercase text-decoration-none text-light">Home</a>
                        <a href="{{ route('empresa') }}" class="d-block text-uppercase text-decoration-none text-light">Empresa</a>
                        <a href="{{ route('productos') }}" class="d-block text-uppercase text-decoration-none text-light">Productos</a>
                        <a href="{{ route('calidad') }}" class="d-block text-uppercase text-decoration-none text-light">Calidad</a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <a href="{{ route('laboratorio') }}" class="d-block text-uppercase text-decoration-none text-light">Laboratorio</a>
                        <a href="{{ route('solicitud-de-presupuesto') }}" class="d-block text-uppercase text-decoration-none text-light">Solicitud de presupuesto</a>
                        <a href="{{ route('contacto') }}" class="d-block text-uppercase text-decoration-none text-light">Contacto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 text-white mb-sm-4 mb-md-0">
                <div class="row">
                    <div class="col-sm-12 newsletter">
                        <h6 class="text-uppercase text-white font-weight-600">SUSCRIBITE AL NEWSLETTER</h6>
                        <form action="{{ route('newsletter.store') }}" id="formNewsletter">
                            @csrf
                            <div class="">
                                <div class="input-group font-size-12">
                                    <input type="email" name="email" autocomplete="off" class="form-control font-size-12 bg-white" placeholder="Ingresa tu email" style="border-radius: 0;">
                                    
                                    <button type="submit" class="input-group-text bg-white" style=""><img src="{{ asset('images/Path_3825.svg') }}" alt=""></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 font-size-13 mb-sm-4 mb-md-0">
                <div class="row">
                    <h6 class="text-uppercase text-white font-weight-600">contacto</h6>
                    <div class="d-flex ">
                        <i class="fas fa-map-marker-alt text-white d-block me-2 mb-3"></i>
                        <address class="d-block m-0 text-light">{{ $data->address }}</address>
                    </div>
                    <div class="d-flex">
                        <i class="fas fa-envelope text-white d-block me-2 mb-3"></i><br>
                        <a href="mailto:{{ $data->email }}" class="text-light text-decoration-none">{{ $data->email }}</a>
                    </div>
                    <div class="d-flex flex-wrap">
                        <i class="fas fa-phone-alt text-white d-block me-2 mb-3"></i>
                        @isset($data->phone1)
                            @php $phone = Str::of($data->phone1)->explode('|') @endphp
                            @if(count($phone) == 2)
                                <a href="tel:{{$phone[0]}}" class="text-light text-decoration-none">{{ $phone[1] }}</a> 
                            @else
                                <a href="tel:{{ $data->phone1}}" class="text-light text-decoration-none">{{ $data->phone1 }}</a> 
                            @endif
                            <span class="text-light px-2">/</span>     
                        @endisset
                        @isset($data->phone2)
                            @php $phone2 = Str::of($data->phone2)->explode('|') @endphp
                            @if(count($phone2) == 2)
                                <a href="tel:{{$phone2[0]}}" class="text-light text-decoration-none">{{ $phone2[1] }}</a> 
                            @else
                                <a href="tel:{{ $data->phone2}}" class="text-light text-decoration-none">{{ $data->phone2 }}</a> 
                            @endif
                            <span class="text-light px-2">/</span>               
                        @endisset
                        @isset($data->phone3)
                            @php $phone3= Str::of($data->phone3)->explode('|') @endphp
                            @if(count($phone3) == 2)
                                <a href="tel:{{$phone3[0]}}" class="text-light text-decoration-none">{{ $phone3[1] }}</a> 
                            @else
                                <a href="tel:{{ $data->phone3}}" class="text-light text-decoration-none">{{ $data->phone3 }}</a> 
                            @endif
                            <span class="text-light px-2">/</span>              
                        @endisset
                        @isset($data->phone4)
                            @php $phone4 = Str::of($data->phone4)->explode('|') @endphp
                            @if(count($phone4) == 2)
                                <a href="tel:{{$phone4[0]}}" class="text-light text-decoration-none">{{ $phone4[1] }}</a> 
                            @else
                                <a href="tel:{{ $data->phone4}}" class="text-light text-decoration-none">{{ $data->phone4 }}</a> 
                            @endif                      
                        @endisset
                    </div>  
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="text-light p-2 font-size-13 bg-primary">
    <div class="container pt-2" style="border-top: 2px solid #fafafa3d;">
        <div class="row">
            <div class="col">
                <span><i class="far fa-copyright"></i> Copyright 2021 Transmiciones Mecánicas S.A. Todos los derechos reservados</span>
            </div>
        </div>
    </div>
</div>