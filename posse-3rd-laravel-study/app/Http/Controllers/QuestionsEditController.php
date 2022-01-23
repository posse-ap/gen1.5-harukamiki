<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizy_area;

class QuestionsEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizy_areas = Quizy_area::all();
        return view('admin.index', compact('quizy_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Quizy_area::create($request->all());
        return redirect()->route('crud.index')->with('success', '新規登録完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Quizy_area::find($id);
        return view('admin.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Quizy_area::find($id);
        return view('admin.edit', compact('area'));
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
            'area' => $request->name,
            'id' => $id
        ];
        Quizy_area::where('id', $id)->update($update);
        // return back()->with('success', '編集完了しました');
        return redirect('/crud')->with('success', '編集完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quizy_area::where('id', $id)->delete();
        return redirect('/')->with('success', '削除完了しました');
    }
}
