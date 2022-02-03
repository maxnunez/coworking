@extends('coworking.layouts.app')
@section('content')

<div class="p-large">
    <div class="content">
        <div class="desarrollo">
        @include('coworking.bakent.partials.messages')
        @include('coworking.bakent.partials.errors', ['errors' => $errors])
            {!! Form::open([
                'url' => 'admin/post-blogs',
                'class' => 'form-horizontal',
                'files'=>true,
                'redirect'=> url('admin/post-blogs'),
                'autocomplete'=>'off'
            ]) !!}
            @include('coworking.bakent.blogs.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
