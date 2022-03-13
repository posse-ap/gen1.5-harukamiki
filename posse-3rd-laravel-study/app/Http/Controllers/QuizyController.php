<?php
 
namespace App\Http\Controllers;

use App\Question;
use App\Quizy_area;
use App\Choice;
use Illuminate\Http\Request;


class QuizyController extends Controller
{
  public function index(Request $request) {
    $quiz_id = $request->id;
    $area = Quizy_area::find($quiz_id);
    $questions = Question::where('area', $quiz_id)->get();
    $choices= Choice::select('question_id','name')->get();
    $correct_answers = Choice::where('validation',1)->get();
    return view('users.quizy', compact('area', 'questions' , 'choices', 'correct_answers'));
  }
}