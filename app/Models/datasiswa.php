<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiSwa extends Model
{
   use HasFactory;
   
   protected $table = 'siswa';
   protected $primarykey = 'id';
   protected $fillable = ['id', 'nama', 'kelas', 'jurusan', 'nisn', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'password', 'id_guru'];
   

   public function dataguru()
   {
      return $this->belongsTo(DataGuru::class, 'id_guru', 'id');
   }
}
