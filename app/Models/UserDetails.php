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
        'father_name',
        'mother_name',
        'father_mobile_number',
        'mother_mobile_number',
        'profile_image',
        'class_standard',
        'qualification',
        'status',
        'address',
        'date_of_birth',
        'gender',
        'category',
        'pincode',
        'district',
        'religion',
        'caste',
        'blood_group',
        'father_occupation',
        'user_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
