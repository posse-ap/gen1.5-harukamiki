<?php
 
namespace App\Http\Controllers;
// use Illuminate\Http\Request;
 
class QuizyController extends Controller
{
  public function tokyo() {
    return view('quizy');
    
  }

  public function hiroshima() {
    return view('quizy');
  }

}