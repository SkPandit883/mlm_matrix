<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use App\Models\ReferalCode;
use App\Models\Matrix;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
              'name' => 'admin',
              'email' => 'admin@gmail.com',
              'password' =>Hash::make('admin'),
              'isAdmin'=>1
        ]);
        ReferalCode::create([
             'user_id'=>$user->id,
             'referal_code' =>'12345',

        ]);
        Matrix::create([
            'user_id'=>$user->id,
            'level' =>0
        ]);


    }
}
