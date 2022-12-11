<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuru extends Model
{
    use HasFactory;
   
    protected $table = 'guru';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'mapel',
        'kelas',
        'jenis_kelamin',
        'no_telp',
        'email',
        'password',
        'created_at',
        'updated_at'
    ];


    public function dataguru()
    {
       return $this->hasMany(DataSiswa::class);
    }
}
