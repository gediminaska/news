@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href={{ route('stories.index') }}>News</a>
    </div>
@endsection