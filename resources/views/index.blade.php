@extends('layout')

@section('content')
<h1>MYPICTURE</h1>
<div>
    <p1>{{$message}}</p1>
</div>

<table class='table table-striped table-hover'>
    @foreach($pictures as $picture)
    <tr>
        <td>
            <a href='{{ route("picture.show",["id" => $picture->id])}}'>
                {{$picture -> content}},
                {{$picture -> user_name}}
            </a>
        </td>
    </tr>
    @endforeach
</table>
<div>
    <a href='{{ route("picture.new")}}' class='btn btn-primary'>新規投稿</a>
</div>
@endsection