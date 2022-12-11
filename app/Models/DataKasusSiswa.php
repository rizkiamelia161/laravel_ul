<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKasusSiswa extends Model
{
    use HasFactory;
   
    protected $table = 'datakasus';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'id_siswa',
        'id_guru',
        'id_kasus',
        'pelanggaran',
        'tindak_lanjut',
        'jumlah_point',
        'created_at',
        'updated_at'
    ];
}
