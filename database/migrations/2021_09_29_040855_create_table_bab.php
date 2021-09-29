<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bab', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('idbab');
            $table->integer('idbuku');
            $table->string('bab',50);
            $table->string('judul',100);
            $table->longText('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bab');
    }
}
