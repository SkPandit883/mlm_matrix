<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ReferalCode;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password', 
        'refer_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function referal_code(){
        return $this->hasOne(ReferalCode::class,'user_id');
    } 
    public function matrix(){
        return $this->hasOne(Matrix::class,'user_id');
    }
    public function matrix_child(){
        return $this->hasMany(Matrix::class,'parent_id','id');
    }
    public function left_child(){
        return $this->hasOne(Matrix::class,'left_child');
    }
    public function right_child(){
        return $this->hasOne(Matrix::class,'right_child');
    }
    public function middle_child(){
        return $this->hasOne(Matrix::class,'middle_child');
    }
}
