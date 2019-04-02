@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        {{ $story->title }}
    </div>
    <p>{{$story->body}}</p>
    <a href={{route('stories.edit', $story->id)}}>Edit story</a>
    <form action={{route('stories.destroy', $story)}} method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit">Delete Story</button>
    </form>
    <h3>
        <a href={{ route('comments.create', $story->id) }}>Leave a comment</a>
    </h3>
    <h2>Comments:</h2>
    @if($sort=='DESC')
        <a href={{route('stories.show', [$story, 'ASC'])}}>Old first</a>
    @else
        <a href={{route('stories.show', [$story, 'DESC'])}}>New first</a>
    @endif
    @foreach($sort=='DESC' ? $story->comments->sortByDesc('created_at') : $story->comments as $comment)
        <p>{{$comment->author}} said:</p>
        <p>{{$comment->body}}</p>
        <br>
    @endforeach
@endsection