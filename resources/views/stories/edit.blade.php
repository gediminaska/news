@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Edit story
    </div>
    <form action={{ route('stories.update', $story) }} method="POST">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <p>Author:</p>
        <input type="text" name="author" value={{ $story->author }}>
        <p>Title:</p>
        <input type="text" name="title" value={{$story->title}}>
        <br>
        <textarea name="body" id="" cols="80" rows="10">{{ $story->body }}</textarea>
        <br>
        <button type="submit">Update story</button>
    </form>
@endsection