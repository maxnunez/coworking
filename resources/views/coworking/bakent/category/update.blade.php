@extends('coworking.layouts.app')
@section('content')
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
       {!! Form::model($category, [
            'method' => 'PATCH',
            'url'    => ['admin/categorias', $category->id],
            'class'  => 'form-horizontal',
            'redirect'=> url('admin/categorias'),
            'files'  => true
            ]) !!}
            @include('coworking.bakent.category.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
