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
        <p>{{$bookmark -> content}}</p>
    @endforeach
</body>
</html>
