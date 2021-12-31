<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'material';
    protected $primaryKey = "material_id";
    protected $fillable = ['bab_material', 'desc_material'];


public function student(){
    return $this->belongsToMany(Student::class, 'material_students', 'material_id', 'student_id')->withPivot('created_at');
    }
}
