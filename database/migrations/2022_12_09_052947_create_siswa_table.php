<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('nisn');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            $table->integer('id_guru')->unsigned()->nullable()->default(null);
            $table->timestamps();

            $table->index(['id', 'nama', 'id_walikelas']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
