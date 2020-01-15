<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>mybookmarker</title>
    <style>body {padding: 10px;}</style>
</head>
<body>
    <h1>MYBOOKMARKER</h1>
    <p1>{{$message}}</p1>
    @foreach($bookmarks as $bookmark)
        <p>
            <a href='{{route ("bookmark.show",["id"=>$bookmark->id])}}'>
            {{$bookmark -> content}},
            {{$bokkmark->user_name}}
            </a>
            </p>
    @endforeach
    <div>
        <a href={{ route('bookmark.new')}}>新規登録</a>
    </div>
</body>
</html>
