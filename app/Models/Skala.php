<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skala extends Model
{
    use HasFactory;
    protected $fillable = [
        'value',
        'keterangan'
    ];
    protected $primaryKey = 'id_skala';

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'id_skala');
    }
}
