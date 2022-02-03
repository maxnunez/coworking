@extends('coworking.layouts.app')
@section('content')

<div class="p-large">
    <div class="content">
        <div class="desarrollo">
        @include('coworking.bakent.partials.messages')
        @include('coworking.bakent.partials.errors', ['errors' => $errors])
            {!! Form::open([
                'url' => 'admin/productos-servicios',
                'class' => 'form-horizontal',
                'files'=>true,
                'redirect'=> url('admin/productos-servicios'),
                'autocomplete'=>'off'
            ]) !!}
            @include('coworking.bakent.products.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
