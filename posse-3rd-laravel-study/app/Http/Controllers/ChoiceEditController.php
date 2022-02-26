<?php

namespace App\Http\Controllers;
use App\Question;
use App\Quizy_area;
use Illuminate\Http\Request;

class ChoiceEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $area_id = $request->area;

        $questions = Question::query();
        $choices= $questions->where('area','like',$request->area)->get();

        // 写真保存
        $new_question = new Question;
         // name属性が'image1'のinputタグをファイル形式に、画像をpublic/avatarに保存
         $image_path = $request->file('image1')->store('public/image/');
         // 上記処理にて保存した画像に名前を付け、userテーブルのthumbnailカラムに、格納
         $new_question->image1 = basename($image_path);
         $new_question->save();
//  エラーはここだよ！！！！！！！！！・・・・・・・・・/////////////
        //  Question::create($request->all());
        return view('admin.show', compact('choices', 'area_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::query();
        $choices= $questions->where('area','like',$id)->get();
        return view('admin.show', compact('choices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $area)
    {
        Question::where('id', $id)->delete();
        $questions = Question::query();
        $choices= $questions->where('area','like',$id)->get();
        return view('admin.show', compact('choices','area_id'))->with('success', '削除完了しました');
    }
}
