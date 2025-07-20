<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa'; // karena nama tabel tidak jamak

    protected $primaryKey = 'nisn';
    public $incrementing = false; // karena primary key bukan integer auto-increment
    protected $keyType = 'string';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
        'tgl_lahir',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'no_hp',
    ];

    public function sosialEkonomi()
    {
        return $this->hasOne(SosialEkonomi::class, 'nisn', 'nisn');
    }

}
