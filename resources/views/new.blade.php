@extends('layout')

@section('content')
<h1>MYPICTURE</h1>
<p>{{$message}}</p>
{{Form::open(['route'=>'picture.store','files'=>true])}}
<div class="form-group">
    <!--投稿した画像のユーザーネームをDBに格納させる-->
    {{Form::label('user_name','Name:')}}
    {{Form::text('user_name',null)}}
</div>
<div class='form-group'>
    <!--投稿したコメントをDBに格納するビュー-->
    {{Form::label('content','Content:')}}
    {{Form::text('content',null)}}
</div>
<div class='form-group'>
    {{Form::file('thefile')}}
</div>
<div class="form-group">
    {{Form::submit('作成する',['class'=>'btn btn-primary'])}}
    <a href='{{ route("picture.list")}}'>一覧に戻る</a>
</div>
{{Form::close()}}
@endsection