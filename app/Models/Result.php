<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_type',
        'user_id',
        'year_session',
        'class_standard',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function marks(){
        return $this->hasMany(ResultMark::class,'result_id','id');
    }
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
