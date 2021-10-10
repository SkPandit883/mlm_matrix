<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function parent(){
        return $this->belongTo(User::class,'parent_id','id');
    }
    public function left_child(){
        return $this->hasOne(Matrix::class,'parent_id','left_child');
    }
    public function right_child(){
        return $this->belongsTo(Matrix::class,'parent_id','right_child');
    }
    public function middle_child(){
        return $this->belongsTo(Matrix::class,'parent_id','middle_child');
    }
   
}
