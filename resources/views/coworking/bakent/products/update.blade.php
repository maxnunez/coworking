@extends('coworking.layouts.app')
@section('content')
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
       {!! Form::model($product, [
            'method' => 'PATCH',
            'url'    => ['admin/productos-servicios', $product->id],
            'class'  => 'form-horizontal',
            'redirect'=> url('admin/productos-servicios'),
            'files'  => true
            ]) !!}
            @include('coworking.bakent.products.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
