@extends('coworking.layouts.app')
@section('content')
<div class="p-large">
    <div class="content">
        <div class="desarrollo">
       {!! Form::model($blog, [
            'method' => 'PATCH',
            'url'    => ['admin/post-blogs', $blog->id],
            'class'  => 'form-horizontal',
            'redirect'=> url('admin/post-blogs'),
            'files'  => true
            ]) !!}
            @include('coworking.bakent.blogs.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
