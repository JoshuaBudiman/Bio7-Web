<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;

    protected $table = 'bab';
    protected $primaryKey = 'bab_id';
    protected $fillable = [
        'bab_id',
        'bab'
    ];


    public function stages(){
        return $this->hasMany(Stage::class, 'bab_id', 'bab_id');
    }
}
