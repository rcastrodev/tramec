@extends('adminlte::page')
@section('title', 'Calidad')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Calidad</h1>
    </div>
@stop
@section('content')
@isset($section1)
    <form action="{{ route('quality.update') }}" method="post" class="row mb-5" data-async="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section1->id}}">
        <div class="form-group col-sm-12">
            <input type="text" name="content_1" value="{{$section1->content_1}}" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <textarea name="content_2" class="ckeditor" cols="30" rows="10">{{$section1->content_2}}</textarea>
        </div>
        <div class="form-group col-sm-12 col-md-3">
            @if (Storage::disk('custom')->exists($section1->image))
               <img src="{{ asset($section1->image) }}" width="300" height="100"> 
            @endif
            <small>tamaño recomendado 600x400px</small>
            <input type="file" name="image" class="form-control-file">
        </div>
        <div class="form-group col-sm-12 col-md-3">
            @if (Storage::disk('custom')->exists($section1->content_3))
               <img src="{{ asset($section1->content_3) }}" width="300" height="100"> 
            @endif
            <small>tamaño recomendado 241x81px</small>
            <input type="file" name="content_3" class="form-control-file">
        </div>
        <div class="col-sm-12 my-4">
            <button class="btn btn-primary">Actualizar</button>
        </div>
    </form>  
@endisset
<div class="row mb-5">
    <div class="col-sm-12">
        <div class="d-flex mb-4">
            <h3 class="mr-3">items</h3>
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear</button>
        </div>
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Contenido</th>
                    <th>Orden</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@includeIf('administrator.quality.modals.create')
@includeIf('administrator.quality.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('quality.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/quality/index.js') }}"></script>
@stop

