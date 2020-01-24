<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>mybookmarker</title>
    @include('style-sheet') <!--style-sheet.blade.phpを読み込む -->
</head>
<body>
    @include('nav') <!--nav.blade.phpを読み込む -->
    <div class='container'>
    @yield('content') <!--index.blade.phpのcontentセクションが入る -->
    </div>
</body>
</html>
