<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\ReferalCode;
use Brian2694\Toastr\Facades\Toastr;
use Str;
use App\Models\Matrix;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $referal_code_exist=ReferalCode::where('referal_code',$request->referal_code)->first();
        if(!$referal_code_exist){
            Toastr::error('Invalid Referal Code','Error');
            return redirect()->back()->with('error','Invalid Referal Code');
        }
        $matrix=Matrix::where('user_id',$referal_code_exist->user_id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'refer_id'=>$referal_code_exist->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $referal_code=ReferalCode::create([
             'user_id'=>$user->id,
             'referal_code'=>$user->id."R".Str::random(4)
        ]);
        if($matrix->level+1<=3){
            $level = $matrix->level+1;
            $parent_id=$matrix->user_id;
            if($matrix->left_child === NULL){
                $key='left_child';
            }elseif($matrix->middle_child === NULL){
                $key='middle_child';
            }elseif($matrix->right_child === NULL){
                $key='right_child';
            }else{
                return redirect()->back()->with('error','Exceeds Width of the MLM');
            }
        }else{
            return redirect()->back()->with('error','Exceeds Depth of the MLM');
        }
        $matrix->update([
                 $key =>$user->id
        ]);
        $new_matrix=Matrix::create([
                    'user_id'=>$user->id,
                    'parent_id'=>$parent_id,
                    'level'=>$level
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home');
    }
}
