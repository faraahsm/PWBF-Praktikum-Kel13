<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kemajuan', function (Blueprint $table) {
            $table->id();
            $table->integer('idkemajuan');
            $table->integer('idsantri');
            $table->integer('idpengurus');
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
        Schema::dropIfExists('table_kemajuan');
    }
}
