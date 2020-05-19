<?php

namespace App\Http\Controllers;

use App\picture;
use Illuminate\Http\Request;

class pictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->filled('keyword')){
          $keyword=$request->input('keyword');
          $message='This is my picture memo.'.$keyword;
          $pictures = picture::where('content','like','%'.$keyword.'%')->get();
           //データベースに格納されてあるデータの中で、入力されたキーワードが含まれているものを呼び出す。
        }else{
            $message='This is my picture memo.';
            $pictures = picture::all();
             //データベースに格納されてあるデータを全て呼び出す。
        }
        return view('index',['message'=>$message,'pictures'=>$pictures]); 
        //html上にここで格納した変数の中身を表示させる為に渡す。
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message='New picture';
        return view('new',['message'=>$message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id,picture $picture)
    {
        $picture=new picture();
        //投稿した画像をDBに格納させる
        $picture->content=$request->content;
        $picture->user_name=$request->user_name;
        $picture->save();
         //tinkerコマンドと同じ
        return redirect()->route('picture.show',['id'=>$picture->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id,picture $picture)
    {
        $message='This is your picture.'.$id;
        $picture=picture::find($id);
         //$idに格納された番号と一致したデータを引っ張り出す。
        return view('show',['message'=>$message,'picture'=>$picture]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,picture $picture)
    {
        $message='Edit your picture.'.$id;
        $picture=picture::find($id);
         //$idに格納された番号と一致したデータを引っ張り出す。
        return view('edit',['message'=>$message,'picture'=>$picture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, picture $picture)
    {
        $picture=picture::find($id);
        //登録したブックマークをDBに格納させる
        $picture->content=$request->content;
        $picture->user_name=$request->user_name;
        $picture->save();
         //tinkerコマンドと同じ
        return redirect()->route('picture.show',['id'=>$picture->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id,picture $picture)
    {
        $picture=picture::find($id);
        $picture->delete();
        return redirect('/pictures');
    }
}
