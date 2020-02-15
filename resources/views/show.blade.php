@extends('content')
<!--各ページのビューを司る-->
@section('content')
    <h1>MYBOOKMARKER</h1>
    <p>{{$message}}</p>
    <p>{{$bookmark -> content}}</p>
    <p>{{$bookmark->user_name}}</p>
    <p>
        <a href='{{route ("bookmark.list")}}' class='btn btn-outline-primary'>一 覧 に 戻 る</a>
        <a href='{{route ("bookmark.list",["id"=>$bookmark->id])}}' class='btn btn-outline-primary'>編集</a>
        
    </p>
    <div>
        {{Form::open(['method' => 'delete','route'=> ['bookmark.delete',$bookmark->id]])}}
        {{Form::submit('削除')}}
        {{Form::close()}}
    </div>
@endsection