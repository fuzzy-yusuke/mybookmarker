{{Form::open (['method' => 'get']) }}
    {{ csrf_field()}} <!-- クロスサイトリクエストフォージェリによる不正リクエストを防ぐ -->
<div class='form-group' style="position:absolute; top:0px; right:200px">
    {{Form::label('keyword','キーワード:')}} 
    {{Form::text('keyword',null,['class'=>'form-control'])}}
</div>

<div class style="position:absolute; top:0px; right:100px">
    {{Form::submit('検索',['class'=>'btn btn-outline-primary'])}}
</div>
{{Form::close()}}