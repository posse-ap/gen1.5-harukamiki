<?php

namespace App\Http\Controllers;
use App\Question;
use App\Quizy_area;
use App\Choice;
use Illuminate\Http\Request;

class ChoiceEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = $request->input('order');
        // dd($order);
        if($order==null){
            // 通常時
            $questions = Question::where('area',$request->area)->orderBy('id','asc')->get();
        }elseif($order=='backward'){
            // 逆順
            $questions = Question::where('area',$request->area)->orderBy('id','desc')->get();
        }elseif($order=='byupdate'){
            // 更新順
            $questions = Question::where('area',$request->area)->orderBy('updated_at')->get();
        }

        // //それ以外の処理
        // switch ($request->order){
        //     case 1: return redirect('/?order=backward');
        //     break;
        //     case 2: return redirect('/?order=byupdate');
        //     break;
        // }

        $area = Quizy_area::find($request->area);
        $choices= Choice::select('question_id','name')->get();

        return view('admin.show',compact('questions', 'area', 'choices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        // dd($area_id);
        $questions = Question::query();
        $choices= $questions->where('area', $area_id)->get();

        // 選択肢の保存
        // 現在のquestion_idの最後を取得
        // 同じquestion_idで3つのレコードをnameの保存
        $current_question_id = Question::max('id');
        $new_choices = $request->except(['area','image1', '_token']);
        foreach ($new_choices as $new_choice){

            Choice::insert([
                'question_id' => $current_question_id+1,
                'name' => $new_choice,
            ]);

        }

        // 写真保存
        // $new_question = new Question;
         // name属性が'image1'のinputタグをファイル形式で、画像をpublic/imageに、ファイル名をgetClientOriginalName()で保存
         $image_path = $request->file('image1')->storeAs('public/image/', $request->image1->getClientOriginalName());
         

         // 上記処理にて保存した画像に名前を付け、userテーブルのimageカラムに、格納
        $new_question['image1'] = $request->image1->getClientOriginalName();
        $new_question['area'] =$area_id;
        //  $new_question->save();
        $cli = Question::insert($new_question);
        return back()->withInput();
        // return view('admin.show', compact('choices','questions', 'area_id'));
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
        $numbers = Choice::where('question_id', '=', $request->question_number)->get();
        // dd($numbers);
   
        foreach ($numbers as $key => $number){
            $name = 'name_' . $key;
            $choice_id = 'choice_id_' . $key;
            $update = [
                    'name' => $request->input('name_' . $key),
                    // 写真もここに入れたい
                ];
                Choice::where('id', $request->input($choice_id))->update($update);
        }
            // return back()->with('success', '編集完了しました');

            // $questions = Question::query();
            $area = $request->area;
            // dd($area);
            $questions= Question::where('area',$request->area)->get();
            $area = Quizy_area::find($request->area);
            $choices= Choice::select('question_id','name')->get();


            return view('admin.show', compact('questions', 'area', 'choices'))->with('success', '編集完了しました');
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
        Choice::where('question_id', $request['id'])->delete();
        return back()->withInput();
    }
}
