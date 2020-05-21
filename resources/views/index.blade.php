@extends('layout')

@section('content')
<h1>MYPICTURE</h1>
<div>
    <p1>{{$message}}</p1>
</div>
@include('search')
<table class='table table-striped table-hover'>
    @foreach($pictures as $picture)
    <div>
        <p2>
            <a href='{{ route("picture.show",["id" => $picture->id])}}'>
                {{$picture -> content}},
                {{$picture -> user_name}}
            </a>
        </p2>
    </div>
    @endforeach
</table>
<div>
    <a href='{{ route("picture.new")}}'>新 規 登 録</a>
</div>
@endsection