@extends('coworking.front.app')
@section('content')

{{-- content --}}
@include('coworking.front.Template.listItems',['items'=>$blogs,'model'=>'Blog', 'file'=>'blog_images', 'tag'=>'Blog'])
{{-- end content --}}

@endsection