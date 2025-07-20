<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuzzyMamdani extends Model
{
    protected $table = 'fuzzy_mamdani';
    protected $primaryKey = 'id_fuzzy';
    public $incrementing = true; // ✅ HARUS TRUE untuk auto-increment
    public $timestamps = false;

    protected $fillable = [
        // HAPUS 'id_fuzzy' dari fillable karena dia auto-increment
        'id_sosial_ekonomi',
        'kelayakan',
        'status',
        'tgl_proses',
    ];

    public function sosialEkonomi()
    {
        return $this->belongsTo(SosialEkonomi::class, 'id_sosial_ekonomi');
    }

    

}
