@extends('coworking.layouts.app')
@section('content')

<div class="p-large">
    <div class="content">
        <div class="desarrollo">
        @include('coworking.bakent.partials.messages')
        @include('coworking.bakent.partials.errors', ['errors' => $errors])
            {!! Form::open([
                'url' => 'admin/categorias',
                'class' => 'form-horizontal',
                'files'=>true,
                'redirect'=> url('admin/categorias'),
                'autocomplete'=>'off'
            ]) !!}
            @include('coworking.bakent.category.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
