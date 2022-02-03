<div class="row">
    <div class="col-lg-10">
        <fieldset>
            <div class="form-group row {{ $errors->has('question') ? 'has-error' : ''}}">
                {{ Form::label('question', 'Pregunta: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::text('question', null, ['class' => 'form-control ', 'placeholder'=>"Pregunta"]) }}
                    {!! $errors->first('question', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group row {{ $errors->has('answer') ? 'has-error' : ''}}">
                {{ Form::label('answer', 'Respuesta: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::textarea('answer', null, ['id'=>'txtEditor','class' => 'form-control ckeditor', 'placeholder'=>"Contenido"]) }}
                    {!! $errors->first('answer', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
             <div class="form-group row{{ $errors->has('order') ? 'has-error' : ''}}">
                {{ Form::label('order', 'Order: ', ['class' => 'col-md-4 form-control-label text-md-right']) }}
                <div class="col-md-7">
                    {{ Form::number('order', null, ['class' => 'form-control ', 'placeholder'=>"Order"]) }}
                    {!! $errors->first('order', '
                    <p class="help-block">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
        </fieldset>
    </div>
</div>



@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
           $('#select-picker').multiSelect(
            {
                keepOrder: true,
                selectableHeader: "<div class='custom-header'>Lista de Categorias</div>",
                selectionHeader: "<div class='custom-header'>Categorias Seleccion</div>",

            });
        });
</script>
@endsection