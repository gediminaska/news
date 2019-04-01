@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Create new story
    </div>
    <form action={{ route('stories.store') }} method="POST">
        {{ csrf_field() }}
        <p>Author:</p>
        <input type="text" name="author">
        <p>Title:</p>
        <input type="text" name="title">
        <br>
        <textarea name="body" id="" cols="80" rows="10"></textarea>
        <br>
        <button type="submit">Publish story</button>
    </form>
@endsection