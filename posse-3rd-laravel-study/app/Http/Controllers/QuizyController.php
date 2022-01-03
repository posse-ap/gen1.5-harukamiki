<?php
 
namespace App\Http\Controllers;

use App\Question;
use App\Quizy_area;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use QuizyTableSeeder;

class QuizyController extends Controller
{
  public function index(Request $request) {
    $area_id = $request->id;

    $question_choices = Question::all();
    $question_choices = $question_choices->where('area', '==', $area_id);

    // $see = Quizy_area::find(1);
    // dd($see);
    $quizy_areas = Quizy_area::all();
    $quizy_areas = $quizy_areas->where('id', '==', $area_id);
    // dd($quizy_area);
    return view('users.quizy', compact('question_choices', 'quizy_areas'));
  }
}