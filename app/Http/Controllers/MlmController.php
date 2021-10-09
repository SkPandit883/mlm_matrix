<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MlmController extends Controller
{
   public function treeView(){
       return view('treeView');
   }
   public function downline(){
       return view('downline');
   }
}
