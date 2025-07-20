<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosialEkonomi extends Model
{
    protected $table = 'sosial_ekonomi';
    protected $primaryKey = 'id_sosial_ekonomi';
    public $incrementing = true;
    protected $keyType = 'int';
    
    public $timestamps = false;

    protected $fillable = [
        'id_sosial_ekonomi',
        'nisn',
        'jml_penghasilan',
        'tanggungan',
        'tempat_tinggal',
        'aset',
        'pkh',
        'dtks',
        'sktm',
    ];

    // Relasi ke siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn', 'nisn');
    }

    public function fuzzyMamdani()
    {
        return $this->hasOne(FuzzyMamdani::class, 'id_sosial_ekonomi');
    }
}

