<?php
 
namespace App\Http\Controllers;

use App\Quizy;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use QuizyTableSeeder;

class QuizyController extends Controller
{
  public function index(Request $request) {

    // return view('quizy', ['items' => $items]);
    return view('quizy');
  }


}