<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogoSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_name',
        'logo_image',
        'created_by',
    ];
}
