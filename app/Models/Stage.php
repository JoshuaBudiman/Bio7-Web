<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $table = 'stage';
    protected $primaryKey = 'stage_id';
    protected $fillable = [
        'stage_id',
        'stage',
        'bab_id'
    ];

    public function bab(){
       return $this->belongsTo(Bab::class, 'bab_id', 'bab_id');
    }

    public function soals(){
        return $this->hasMany(Soal::class, 'stage_id', 'stage_id');
    }
}
