<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    use HasFactory;

    protected $table = 'student_details';
    protected $primaryKey = 'student_details_id';
    protected $fillable = [
        'student_detail_id',
        'student_profpic',
        'student_id'
    ];

    public function student(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
