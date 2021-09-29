<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailkemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detailkemajuan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('iddetailkemajuan');
            $table->integer('idkemajuan');
            $table->integer('idbab');
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
        Schema::dropIfExists('table_detailkemajuan');
    }
}
