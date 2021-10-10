<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrix;

class MlmController extends Controller
{
   public function treeView(){
       $matrix = Matrix::with(['user','left_child','middle_child','right_child'])->get();
       $level_zero=Matrix::with(['user','left_child','middle_child','right_child'])->first();
       return view('treeView',compact('matrix','level_zero'));
   }
   public function downline(){
       return view('downline');
   }
}
