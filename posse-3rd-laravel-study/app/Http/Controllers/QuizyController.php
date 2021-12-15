<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;
 
class QuizyController extends Controller
{
  public function index(Request $request) {
    $data = [
      'id' => $request->id
    ];
    return view('quizy', $data);
  }


}