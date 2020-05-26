@extends('layout')

@section('content')
<h1>MYPICTURE</h1>
<p>{{$message}}</p>
{{Form::open(['route'=>'picture.store'])}}
<div class='form-group'>
    <!--ユーザーネームをDBに格納させる-->
    {{Form::label('user_name','Name:')}}
    {{Form::text('user_name',null)}}
</div>
<div class='form-group'>
    {{Form::label('content','Content:')}}
    {{Form::text('content',null)}}
    </form>
</div>
<div class='form-group'>
    {{ Form::submit('作成する',['class'=>'btn btn-primary']) }}
    <a href='{{ route("picture.list")}}'>一覧に戻る</a>
</div>
{{Form::close()}}
@endsection