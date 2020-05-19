@extends('content')
<!--各ページのビューを司る-->
@section('content')
    <h1>MYPICTURE</h1>
    <p>{{$message}}</p>
    <p>{{$picture -> content}}</p>
    <p>{{$picture->user_name}}</p>
    <p>
        <a href='{{route ("picture.list")}}' class='btn btn-outline-primary'>一 覧 に 戻 る</a>
        <a href='{{route ("picture.list",["id"=>$picture->id])}}' class='btn btn-outline-primary'>編集</a>
        
    </p>
    <div>
        {{Form::open(['method' => 'delete','route'=> ['picture.delete',$picture->id]])}}
        {{Form::submit('削除')}}
        {{Form::close()}}
    </div>
@endsection