@extends('layput')

@section('content')
    <h1>MYBOOKMARKER</h1>
    <p1>{{$message}}</p1>
    @foreach($bookmarks as $bookmark)
        <p>
            <a href='{{route ("bookmark.show",["id"=>$bookmark->id])}}'>
            {{$bookmark -> content}},
            {{$bokkmark->user_name}}
            </a>
            </p>
    @endforeach
    <div>
        <a href={{ route('bookmark.new')}}>新 規 登 録</a>
    </div>
@endsection