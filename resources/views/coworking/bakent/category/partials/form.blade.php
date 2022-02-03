<div class="row">
    <div class="col-lg-10">
        <fieldset>
            <div class="form-group row {{ $errors->has('name') ? 'has-error' : ''}}">
                {{ Form::label('name', 'Nombre Categoria: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('name', null, ['class' => 'form-control ', 'placeholder'=>"Nombre Categoria"]) }}
                    {!! $errors->first('name', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group row{{ $errors->has('type') ? 'has-error' : ''}}">
                {{ Form::label('type', 'Tipo: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::select('type', ['Producto' => 'producto', 'Servicio' => 'servicio'], ['class' => 'form-control ', 'placeholder'=>"Tipo"]) }}
                    {!! $errors->first('type', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group row{{ $errors->has('url_img') ? 'has-error' : ''}}">
                {{ Form::label('url_img', 'Imagen:', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-lg-7">
                    @if(isset($category->url_img) && $category->url_img != '')
                    <input type="hidden" name="url_img" value="{{ $category->url_img }}">
                        <div class="thumb">
                            <img src="{{ url('img/category_images/'.$category->url_img) }}" width="200px"/>
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
        </fieldset>
    </div>
</div>


