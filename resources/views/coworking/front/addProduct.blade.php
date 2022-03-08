@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'Crea tu producto o servicio'])
<div class="container">
<div class=" row my-5">

        {!! Form::open([
        'url' => '/addProduct',
        'class' => 'form-horizontal mx-auto my-4',
        'files'=>true,
        'redirect'=> url('/'),
        'autocomplete'=>'off'
        ]) !!}
        <div class="">
            <fieldset>
                <div class="form-group row {{ $errors->has('title') ? 'has-error' : ''}}">
                    {{ Form::label('title', 'Titulo: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::text('title', null, ['class' => 'form-control ', 'placeholder'=>"Nombre de producto"]) }}
                        {!! $errors->first('title', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('abstract') ? 'has-error' : ''}}">
                    {{ Form::label('abstract', 'Resumen: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::text('abstract', null, ['class' => 'form-control ', 'placeholder'=>"Resumen"]) }}
                        {!! $errors->first('abstract', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('url_img') ? 'has-error' : ''}}">
                    {{ Form::label('url_img', 'Imagen:', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        @if(isset($blog->url_img) && $blog->url_img != '')
                        <input type="hidden" name="url_img" value="{{ $blog->url_img }}" style="font-size:14px">
                        <div class="thumb">
                            <img src="{{ url('img/blog_images/'.$blog->url_img) }}" width="200px" />
                        </div>
                        @endif
                        <span class="form-control upload">
                            <i aria-hidden="true" class="fa fa-upload" id="B">
                            </i>
                            <input accept="image/*" id="input-fileB" name="url_img" type="file"  style="font-size:14px"/>
                        </span>
                        {!! $errors->first('url_img', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('type') ? 'has-error' : ''}}">
                    {{ Form::label('type', 'Tipo: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::select('type', ['Producto' => 'producto', 'Servicio' => 'servicio','Regalo'=> 'regalo'], ['class' => 'form-control ', 'placeholder'=>"Tipo"]) }}
                        {!! $errors->first('type', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('content') ? 'has-error' : ''}}">
                    {{ Form::label('content', 'Contenido: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::textarea('content', null, ['id'=>'txtEditor','class' => 'form-control ckeditor', 'placeholder'=>"Contenido"]) }}
                        {!! $errors->first('content', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('category_id') ? 'has-error' : ''}}">
                    {{ Form::label('category_id', 'Categoria: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::select('category_id[]', $categories, null, ['class' => 'form-control','id'=>'select-picker','multiple' => 'multiple']) }}
                        {!! $errors->first('category_id', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                </div>
            </fieldset>
        @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>

    </div>
    {{-- end content --}}

</div>
    @endsection
