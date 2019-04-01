@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Leave a comment
    </div>
    <form action={{ route('comments.store') }} method="POST">
        {{ csrf_field() }}
        <p>Author:</p>
        <input type="hidden" name="story_id" value={{$id}}>
        <input type="text" name="author">
        <br>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Leave comment</button>
    </form>
@endsection