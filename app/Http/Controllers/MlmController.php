<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matrix;
use App\Models\User;
use App\Models\ReferalCode;
use Auth;

class MlmController extends Controller
{
   public function treeView(){
       
       $level_zero=Matrix::where('level',0)->first();
       $level_one=Matrix::where('level',1)->get();
       $level_two=Matrix::where('level',2)->get();
       $level_three=Matrix::where('level',3)->get();
       
       return view('treeView',compact('level_zero','level_one','level_two','level_three'));
      
   }
   public function downline(){
       $users=User::with('referal_code')->orderBy('id','ASC')->get();
       return view('downline',compact('users'));
   }
   public function referal(){
       $referal=ReferalCode::where('user_id',Auth::user()->id)->first();
       $referal_code= $referal->referal_code;
       return view('referal',compact('referal_code'));
   }
}
