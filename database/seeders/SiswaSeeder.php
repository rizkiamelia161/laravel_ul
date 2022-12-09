<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // data faker indonesia
         $faker = Faker::create('id_ID');
 
         // membuat data dummy sebanyak 10 record
         for($x = 1; $x <= 10; $x++){
  
             // insert data dummy pegawai dengan faker
             DB::table('siswa')->insert([
                 'id' => $faker->id,
                 'nama' => $faker->name,
                 'kelas' => $faker->class,
                 'alamat' => $faker->address,
             ]);
            }
    }
}
