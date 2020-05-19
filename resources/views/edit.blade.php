@extends('layout')
<!--編集フォーム-->

@section('content')
    <h1>MYPICTURE</h1>
    <p>{{$message}}</p>
    {{Form::model($picture,['route'=>['picture.update',$picture->id]])}}
    <!--「Form:model」ファザードを用いると、既に入っている値を自動で取得することが出来る。
    この場合は、既に登録したブックマークを取得する-->
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
        {{Form::submit('保存する',['class'=>'btn btn-primary'])}}
        <a href='{{ route("picture.list")}}'>戻る</a>
        </div>
        {{Form::close()}}
@endsection