@extends('layouts.app')

@section('content')
<div class="container well">
        @if(count($posts)>0)
           @foreach ($posts as $item)
                 <h1><a href="/post/{{$item->id}}">{{$item->fruitname}}</a></h1>
                 <small>written at {{$item->created_at}}</small>
           @endforeach
           {{$posts->links()}}
        @else
            <h1>No posts found Yet</h1>
        @endif
     </div>
@endsection