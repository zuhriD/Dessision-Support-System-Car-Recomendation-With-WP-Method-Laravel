<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kriteria',
        'valuebobot'
    ];
    protected $primaryKey = 'id_bobot';

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'id_bobot');
    }
}
