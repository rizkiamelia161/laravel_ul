<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class DataGuruSeeder extends Seeder
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
            DB::table('guru')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'mapel' => $faker->randomElement(['pkn', 'agama', 'mtk', 'seni budaya', 'bahasa inggris', 'bahasa indonesia']),
                'jenis_kelamin' => $faker->randomElement(['pria', 'wanita']),
                'no_telp' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
           }
    }
}
