@extends('coworking.layouts.app')
@section('content')

<div class="p-large">
    <div class="content">
        <div class="desarrollo">
       {!! Form::model($question, [
            'method' => 'PATCH',
            'url'    => ['admin/preguntas-respuetas', $question->id],
            'class'  => 'form-horizontal',
            'redirect'=> url('admin/preguntas-respuetas'),
            'files'  => true
            ]) !!}
            @include('coworking.bakent.questions.partials.form', ['errors' => $errors])
            @include('coworking.bakent.partials.buttons')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
