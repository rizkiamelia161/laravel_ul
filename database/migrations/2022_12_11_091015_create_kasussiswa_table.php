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
        Schema::create('kasussiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kasus');
            $table->string('point');
            $table->timestamps();

            $table->index(['id', 'nama_kasus']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasussiswa');
    }
};
