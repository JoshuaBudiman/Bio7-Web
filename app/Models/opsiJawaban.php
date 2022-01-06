<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opsiJawaban extends Model
{
    use HasFactory;

    protected $table = 'opsi_jawaban';
    protected $primaryKey = 'opsiJawaban_id';
    protected $fillable = [
        'opsiJawaban_id',
        'opsi_jawaban',
        'opsi_istrue',
        'soal_id'
    ];

    public function soal(){
        return $this->belongsTo(Soal::class, 'soal_id', 'soal_id');
    }
}
