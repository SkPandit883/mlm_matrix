<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrix;

class MlmController extends Controller
{
   public function treeView(){
       $data = array();
       $child=array();
       $temp=array();
       $matrix = Matrix::with(['left_child','middle_child','right_child'])->get();
       $level_zero=Matrix::where('level',0)->first();
       $level_one=Matrix::where('level',1)->first();
       $level_two=Matrix::where('level',2)->first();
       $level_three=Matrix::where('level',3)->first();
       
       return view('treeView',compact('level_zero','level_one','level_two','level_three'));
      
   }
   public function downline(){
       return view('downline');
   }
}
