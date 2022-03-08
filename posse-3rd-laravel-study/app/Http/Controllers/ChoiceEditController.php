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
        // $new_question = new Question;
         // name属性が'image1'のinputタグをファイル形式で、画像をpublic/imageに、ファイル名をgetClientOriginalName()で保存
         $image_path = $request->file('image1')->storeAs('public/image/', $request->image1->getClientOriginalName());
         

         // 上記処理にて保存した画像に名前を付け、userテーブルのimageカラムに、格納
        $new_question = request()->except(['_token']);
        $new_question['image1'] = $request->image1->getClientOriginalName();
        $new_question['area'] =$area_id;
        //  $new_question->save();
        $cli = Question::insert($new_question);

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
        $choices = Question::find($id);
        return view('admin.choiceEdit', compact('choices'));
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
            $update = [
                'choice1' => $request->choice1,
                'choice2' => $request->choice2,
                'choice3' => $request->choice3
                // 写真もここに入れたい
            ];
            Question::where('id', $id)->update($update);
            // return back()->with('success', '編集完了しました');

            $questions = Question::query();
            $area = $request->area;
            $choices= $questions->where('area','like',$area)->get();
            return view('admin.show', compact('choices'))->with('success', '編集完了しました');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {       
        Question::where('id', $request['id'])->delete();
        return back()->withInput();
    }
}
