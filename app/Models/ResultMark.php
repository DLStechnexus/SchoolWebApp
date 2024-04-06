<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ResultMark extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_name',
        'out_of_marks',
        'obtain_marks',
        'result_id',
        'status',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
