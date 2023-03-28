<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nm_kriteria',
        'jenis'
    ];
    protected $primaryKey = 'id_kriteria';
    public function bobot()
    {
        return $this->hasMany(Bobot::class, 'id_kriteria');
    }
}
