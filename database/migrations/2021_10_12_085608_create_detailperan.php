<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailperan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailperan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('FK_Id_peran')->constrained('peran');
            $table->foreignId('FK_Id_pengurus')->constrained('pengurus');
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
        Schema::dropIfExists('detailperan');
    }
}
