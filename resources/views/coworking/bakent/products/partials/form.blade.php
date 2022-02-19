<div class="row">
    <div class="col-lg-10">
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
                    {{ Form::select('category_id[]', $categories, null,['class' => 'form-control','id'=>'select-picker','multiple' => 'multiple']) }}
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
    </div>
</div>


@section('js')
<script src="http://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#select-picker').multiSelect({
            keepOrder: true,
            selectableHeader: "<div class='custom-header'>Lista de Categorias</div>",
            selectionHeader: "<div class='custom-header'>Categorias Seleccion</div>",

        });
    });

</script>
@endsection
