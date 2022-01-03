<?php
 
namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use QuizyTableSeeder;

class QuizyController extends Controller
{
  public function index(Request $request) {
    $area_id = $request->id;

    $question_choices = Question::all();
    $question_choices = $question_choices->where('area', '==', $area_id);
    // dd($question_choice);
    return view('users.quizy', compact('question_choices'));
  }
}