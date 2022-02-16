@extends('coworking.front.app')
@section('content')
@include('coworking.front.Template.title-page',['title'=>'ayuda e informacion'])
<div class="row my-3">
  @forelse ( $questions as $question)
     <div class="card p-3 my-3">
    <blockquote class="blockquote mb-0 card-body">
      <p class=" font-weight-normal">{{ $question->question }}</p>
      <footer class="blockquote-footer">
        <div class="text-muted text-white bage-question" >
          {!! $question->answer !!} <cite title="Source Title">{{ $question->created_at }}</cite>
        </div>
      </footer>
    </blockquote>
  </div>
  @empty
    no hay preguntas ...
  @endforelse
 
</div>

@endsection
