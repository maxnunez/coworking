@extends('coworking.layouts.app')
@section('content')
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
       {!! Form::model($new, [
            'method' => 'PATCH',
            'url'    => ['admin/noticias', $new->id],
            'class'  => 'form-horizontal',
            'redirect'=> url('admin/noticias'),
            'files'  => true
            ]) !!}
            @include('coworking.bakent.news.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
