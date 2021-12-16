<?php
 
namespace App\Http\Controllers;

use App\Quizy;
use Illuminate\Http\Request;

// use Illuminate\Http\Request;
 
class QuizyController extends Controller
{
  public function index(Request $request) {
    $data = [
      'id' => $request->id
    ];
    $items = Quizy::all();
    return view('quizy', $data, ['items' => '$items']);
  }


}