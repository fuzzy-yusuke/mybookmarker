<?php

namespace App\Http\Controllers;

use App\bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message='This is my bookmark memo.';
        $bookmarks = Bookmark::all(); //データベースに格納されてあるデータを全て呼び出す。
        return view('index',['message'=>$message,'bookmarks'=>$bookmarks]); //html上にここで格納した変数の中身を表示させる為に渡す。
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request,$request)
    {
        $bookmark=new Bookmark();

        $bookmark->content='Hello mybookmarker';
        $bookmark->user_name='tester';
        $bookmark->save(); //tinkerコマンドと同じ
        return redirect('/bookmarks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id,Bookmark $bookmark)
    {
        $message='This is your bookmark.'.$id;
        $bookmark=Bookmark::find($id); //$idに格納された番号と一致したデータを引っ張り出す。
        return view('show',['message'=>$message,'bookmark'=>$bookmark]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bookmark $bookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,Bookmark $bookmark)
    {
        $bookmark=Bookmark::find($id);
        $bookmark->delete();
        return redirect('/bookmarks');
    }
}
