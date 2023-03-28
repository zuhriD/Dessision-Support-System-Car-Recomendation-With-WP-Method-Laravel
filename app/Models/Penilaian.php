<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $fillable = [
        'idalternatif',
        'id_bobot',
        'id_skala'
    ];

    protected $primaryKey = 'id_nilai';

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'idalternatif');
    }

    public function bobot()
    {
        return $this->belongsTo(Bobot::class, 'id_bobot');
    }

    public function skala()
    {
        return $this->belongsTo(Skala::class, 'id_skala');
    }
}
