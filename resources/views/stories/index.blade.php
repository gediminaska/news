@extends('layouts.app')

@section('content')
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href={{ route('news.index') }}>News</a>
    </div>
@endsection