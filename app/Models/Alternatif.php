<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $fillable = [
        'nm_alternatif',
    ];
    protected $primaryKey = 'idalternatif';

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'idalternatif');
    }
    
}
