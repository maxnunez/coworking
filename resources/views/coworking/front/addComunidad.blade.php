@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.title-page',['title'=>'Unete a la Comunidad'])
<div class="container">
<div class=" row my-5">


        {!! Form::open([
        'url' => '/unirceComunidad',
        'class' => 'form-horizontal mx-auto',
        'files'=>true,
        'autocomplete'=>'off'
        ]) !!}
        <div class="">
            <fieldset>
                <div class="form-group row{{ $errors->has('url_img') ? 'has-error' : ''}}">
                    {{ Form::label('url_img', 'Imagen:', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-lg-7">
                        @if(isset($blog->url_img) && $blog->url_img != '')
                        <input type="hidden" name="url_img" value="{{ $blog->url_img }}">
                        <div class="thumb">
                            <img src="{{ url('img/blog_images/'.$blog->url_img) }}" width="200px" />
                        </div>
                        @endif
                        <span class="form-control upload">
                            <i aria-hidden="true" class="fa fa-upload" id="B">
                            </i>
                            <input accept="image/*" id="input-fileB" name="url_img" type="file" />
                        </span>
                        {!! $errors->first('url_img', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row{{ $errors->has('name_complete') ? 'has-error' : ''}}">
                    {{ Form::label('name_complete', 'Nombre Completo: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::text('name_complete', null, ['class' => 'form-control ', 'placeholder'=>"Nombre Completo"]) }}
                        {!! $errors->first('name_complete', '
                        <p class="help-block">
                            :message
                        </p>
                        ') !!}
                    </div>
                </div>
                <div class="form-group row {{ $errors->has('information') ? 'has-error' : ''}}">
                    {{ Form::label('content', 'information: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                    <div class="col-md-7">
                        {{ Form::textarea('information', null, ['id'=>'txtEditor','class' => 'form-control ckeditor', 'placeholder'=>"information"]) }}
                        {!! $errors->first('information', '
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
