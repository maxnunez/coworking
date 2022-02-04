@extends('coworking.front.app')
@section('content')

@include('coworking.front.Template.listItems', ['items'=>$news,'model'=>'News', 'file'=>'news_images', 'tag'=>'Noticias'])

@endsection
