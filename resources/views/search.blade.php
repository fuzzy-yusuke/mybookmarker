{{Form::open (['method' => 'get']) }}
    {{ csrf_field()}} <!-- クロスサイトリクエストフォージェリによる不正リクエストを防ぐ -->
<div class='form-group' style="position:absolute; top:0px; right:159px">
    {{Form::text('keyword',null,['class'=>'form-control','placeholder'=>'キーワードを入力'])}}
</div>

<div class style="position:absolute; top:0px; right:100px">
    {{Form::submit('検索',['class'=>'btn btn-primary'])}}
</div>
{{Form::close()}}