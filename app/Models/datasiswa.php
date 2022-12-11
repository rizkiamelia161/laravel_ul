<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasiswa extends Model
{
   protected $table = 'siswa';
   protected $primarykey = 'id';
   protected $fillable = [

   'id', 'nama', 'kelas', 'jurusan', 'nisn', 'jenis_kelamin', 'alamat', 'no_telp', 'email', 'password', 'wali_kelas'];
           
}
