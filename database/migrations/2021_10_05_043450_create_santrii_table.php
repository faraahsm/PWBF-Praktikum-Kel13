<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santrii', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri',50);
            $table->char('gender',1);
            $table->date('tanggallhr');
            $table->string('kotalhr',40);
            $table->string('nama_ortu',50);
            $table->string('alamat_ortu',100);
            $table->string('hp',15);
            $table->string('email',30);
            $table->char('password',32);
            $table->date('tanggal_masuk');
            $table->char('aktif',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('santrii');
    }
}
