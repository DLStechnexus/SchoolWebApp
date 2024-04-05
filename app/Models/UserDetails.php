<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'aadhar_number',
        'mobile_number',
        'profile_image',
        'class_standard',
        'status',
        'father_name',
        'mother_name',
        'father_mobile_number',
        'mother_mobile_number',
        'address',
        'user_id',
        'qualification',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
