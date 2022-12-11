<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class DataSiswaSeeder extends Seeder
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
         for($x = 1; $x <= 50; $x++){
  
             // insert data dummy pegawai dengan faker
             DB::table('siswa')->insert([
                 'nama' => $faker->name,
                 'kelas' => $faker->randomElement(['10', '11', '12']),
                 'alamat' => $faker->address,
                 'nisn' => $faker->numerify('###########'),
                 'jenis_kelamin' => $faker->randomElement(['pria', 'wanita']),
                 'no_telp' => $faker->phoneNumber,
                 'email' => $faker->email,
                 'password' => bcrypt('secret'),
                 'wali_kelas' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
                 'jurusan' => $faker->randomElement(['rpl', 'mm', 'tkj']),
             ]);
            }
    }
}
