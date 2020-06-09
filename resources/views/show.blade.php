@extends('layout')
<!--各ページのビューを司る-->
@section('content')
<h1>MYPICTURE</h1>
<div>
    <p>{{$message}}</p>
    <p>{{$picture -> content}}</p>
    <p>{{$picture -> user_name}}</p>
    <p><img src="{{ asset('/storage/'.$picture->image)}}"></p>
    <p>
        <a href='{{route ("picture.list")}}' class='btn btn-outline-primary'>一覧に戻る</a>
        <a href='{{route ("picture.edit",["id"=>$picture->id])}}' class='btn btn-outline-primary'>編集</a>

    </p>
</div>
<div>
    {{Form::open(['method' => 'delete','route'=> ['picture.delete',$picture->id]])}}
    {{Form::submit('削除')}}
    {{Form::close()}}
</div>
@endsection