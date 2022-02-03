<div class="row">
    <div class="col-lg-10">
        <fieldset>
            <div class="form-group row {{ $errors->has('title') ? 'has-error' : ''}}">
                {{ Form::label('title', 'Titulo: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('title', null, ['class' => 'form-control ', 'placeholder'=>"Titulo de noticia"]) }}
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
                <div class="col-lg-7">
                    @if(isset($blog->url_img) && $blog->url_img != '')
                    <input type="hidden" name="url_img" value="{{ $blog->url_img }}">
                        <div class="thumb">
                            <img src="{{ url('img/blog_images/'.$blog->url_img) }}" width="200px"/>
                        </div>
                    @endif
                    <span class="form-control upload">
                        <i aria-hidden="true" class="fa fa-upload" id="B">
                        </i>
                        <input accept="image/*" id="input-fileB" name="url_img" type="file"/>
                    </span>
                    {!! $errors->first('url_img', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group row{{ $errors->has('url_info') ? 'has-error' : ''}}">
                {{ Form::label('url_info', 'Url de informacion: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('url_info', null, ['class' => 'form-control ', 'placeholder'=>"url de informacion"]) }}
                    {!! $errors->first('url_info', '
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
        </fieldset>
    </div>
</div>

