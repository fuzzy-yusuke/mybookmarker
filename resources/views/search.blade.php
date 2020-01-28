{{Form::open (['method' => 'get']) }}
    {{ csrf_field()}} <!-- クロスサイトリクエストフォージェリによる不正リクエストを防ぐ -->
<div class='form-group'>
    {{Form::label('keyword','キーワード:')}} <!--後で「tag」にする -->
    {{Form::text('keyword',null,['class'=>'form-control'])}}
</div>

<div class>
    {{Form::submit('検索',['class'=>'btn btn-outline-primary'])}}
</div>
{{Form::close()}}