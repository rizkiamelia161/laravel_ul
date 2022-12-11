<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKasus extends Model
{
    use HasFactory;
   
    protected $table = 'kasussiswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_kasus',
        'point',
        'created_at',
        'updated_at'
    ];
}
