@extends('adminlte::page')
@section('title', 'Contenido empresa')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Contenido de empresa</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear Slider</button>
    </div>
@stop
@section('content')
<div class="row mb-5">
    <div class="col-sm-12">
        <h3>Sliders</h3>
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@isset($section2)
    <form action="{{ route('company.update') }}" method="post" class="row my-5">
        @csrf
        <div class="col-sm-12">
            <h3>Sección 2</h3>
        </div>
        <input type="hidden" name="id" value="{{$section2->id}}">
        <div class="form-group col-sm-12 col-md-5">
            <input type="text" name="content_1" value="{{$section2->content_1}}" class="form-control">
        </div>
        <div class="form-group col-sm-12 col-md-5">
            <input type="text" name="content_2" class="form-control" value="{{$section2->content_2}}">
        </div>
        <div class="col-sm-12 col-md-2">
            <button class="btn btn-primary">Actualizar</button>
        </div>
    </form>  
@endisset
@isset($section3)
    <div class="row mb-5">
        <div class="col-sm-12">
            <div class="d-flex mb-4">
                <h3 class="mr-3">Seccion 3</h3>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element-number-list">crear</button>
            </div>
            <table id="page_table_number" class="table">
                <thead>
                    <tr>
                        <th>Destacado</th>
                        <th>Texto</th>
                        <th>Orden</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>   
@endisset
@isset($section4)
    <form action="{{ route('company.update2') }}" method="post" class="my-5" data-async="no">
        @csrf
        <div class="col-sm-12"><h3>Secci&oacute;n 4</h3></div>
        <input type="hidden" name="id" value="{{$section4->id}}">
        <textarea name="content_1" class="ckeditor" cols="30" rows="10">{{$section4->content_1}}</textarea>
        <button class="btn btn-primary my-5">Actualizar</button>
    </form>  
@endisset

@includeIf('administrator.company.modals.create')
@includeIf('administrator.company.modals.update')
@includeIf('administrator.company.number-list.create')
@includeIf('administrator.company.number-list.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('company.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/company/index.js') }}"></script>
@stop

