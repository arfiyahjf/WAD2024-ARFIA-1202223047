<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'data_mahasiswa';

    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'email',
        'jurusan',
        'dosen_id'
    ];

    public $timestamps = true;

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}