@extends('layout')

@section('content')
    <h1>MYBOOKMARKER</h1>
    <p>{{$message}}</p>
    {{Form::open(['route'=>'bookmark.store'])}}
        <div class='form-group'>
        <!--登録したブックマークをDBに格納するビュー-->
        {{Form::label('content','Content:')}}
        {{Form::text('content',null)}}
        </div>
        <div class="form-group">
        <!--登録されたブックマークのユーザーネームをDBに格納させる-->
        {{Form::label('user_name','Name:')}}
        {{Form::text('user_name',null)}}
        </div>
        <div class="form-group">
        {{Form::submit('作成する',['class'=>'btn btn-primary'])}}
        <a href={{ route('bookmark.list')}}>一覧に戻る</a>
        </div>
        {{Form::close()}}
@endsection