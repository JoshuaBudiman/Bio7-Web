<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = 'soal';
    protected $primaryKey = 'soal_id';
    protected $fillable = [
        'soal_id',
        'soal_text',
        'stage_id'
    ];

    public function stage(){
        return $this->belongsTo(Stage::class, 'stage_id', 'stage_id');
    }

    public function opsiJawabans(){
        return $this->hasMany(opsiJawaban::class, 'soal_id', 'soal_id');
    }
}
