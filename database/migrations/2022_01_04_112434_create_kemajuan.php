<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemajuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('FK_Id_santri')->constrained('santri','id_santri')->onDelete('cascade');
            $table->foreignId('FK_Id_guru')->constrained('guru','id_guru');
            $table->timestamp('tanggal');
            $table->char('status',1);
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
        Schema::dropIfExists('kemajuan');
    }
}
