@extends('layout')

@section('content')
    <h1>MYBOOKMARKER</h1>
    <p1>{{$message}}</p1>
    @include('search')
    
    @foreach($bookmarks as $bookmark)
        <p2>
            <a href='{{route ("bookmark.show",["id" => $bookmark->id])}}'>
            {{$bookmark -> content}},
            {{$bookmark -> user_name}}
            </a>
            </p2>
    @endforeach
    <div>
        <a href='{{ route("bookmark.new")}}'>新 規 登 録</a>
    </div>
@endsection