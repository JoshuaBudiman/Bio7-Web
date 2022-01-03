<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialStudent extends Model
{
    use HasFactory;

    protected $table = 'material_students';
    protected $primaryKey = 'material_students_id';
    protected $fillable = [
        'material_students_id',
        'student_id',
        'material_id',
        'created_at',
        'updated_at'
    ];
}
