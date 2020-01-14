<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>mybookmarker</title>
    <style>body {padding: 10px;}</style>
</head>
<body>
    <h1>MYBOOKMARKER</h1>
    <p>{{$message}}</p>
    <p>{{$bookmark -> content}}</p>
    <p>{{$bookmark->user_name}}</p>
    <p>
        <a href={{route ('bookmark.list')}}>一 覧 に 戻 る</a>
    </p>
</body>
</html>
