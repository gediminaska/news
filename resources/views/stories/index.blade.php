@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        News
    </div>
    <a href={{ route('stories.create') }}>Create new story</a>
    <hr>
    @foreach($stories as $story)
        <a href={{ route('stories.show', [$story->id, 'ASC']) }}><h1>{{ $story->title }}</h1></a>
        <p>Published {{$story->updated_at}}, by {{ $story->author }}, has {{ count($story->comments) }} comment(s)</p>
        <p>{{ $story->body }}</p>
        <hr>
    @endforeach
@endsection