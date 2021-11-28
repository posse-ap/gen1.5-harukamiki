<?php
 
namespace App\Http\Controllers;
// use Illuminate\Http\Request;
 
class QuizyController extends Controller
{
  public function showpage() {
    return view('quizy');
  }
}