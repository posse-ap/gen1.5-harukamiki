<?php

namespace App\Http\Controllers;
use App\Question;
use App\Quizy_area;
use App\Choice;
use Illuminate\Http\Request;

class OptionEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $question = Question::find($id);
        $choices = Choice::where('question_id', $id)->get();
        // dd($choices);
        return view('admin.choiceEdit', compact('question','choices'));
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
    public function store(Request $request, $id)
    {
        //正解にvalidation→1 不正解にvalidation→0
        $validation = $request->validation;
        if($validation == null){
            $validation = 0;
        };
     
        Choice::insert([
            'question_id' => $request->id,
            'validation' => $validation,
            'name' => $request->name,
            'created_at' => now(),
        ]);
        
        $questions= Question::where('area',$request->question_area)->get();
        $choices = Choice::where('question_id', $request->id)->get();

        $area = Quizy_area::find($request->question_area);
        // $choices= Choice::select('question_id','name')->get();
        return view('admin.show', compact('questions', 'area', 'choices'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
