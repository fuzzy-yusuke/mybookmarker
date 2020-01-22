@extends('content')

@section('content')
    <h1>MYBOOKMARKER</h1>
    <p>{{$message}}</p>
    <p>{{$bookmark -> content}}</p>
    <p>{{$bookmark->user_name}}</p>
    <p>
        <a href={{route ('bookmark.list')}}>一 覧 に 戻 る</a>
    </p>
    <div>
        {{Form::open(['method' => 'delete','route'=> ['bookmark.delete',$bookmark->id]])}}
        {{Form::submit('削除')}}
        {{Form::close()}}
    </div>
@endsection