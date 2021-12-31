<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = "student_id";
    protected $fillable =[
        'email',
        'password',
        'username',
        'name',
        'school',
        'city',
        'birthyear'
    ];

    public function material(){
        return $this->belongsToMany(Material::class, 'material_students', 'student_id', 'material_id')->withPivot('created_at');
    }
}
