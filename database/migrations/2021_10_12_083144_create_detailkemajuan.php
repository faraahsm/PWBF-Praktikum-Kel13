<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailkemajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailkemajuan', function (Blueprint $table) {
            $table->id('detailkemajuan');
            $table->foreignId('FK_Id_kemajuan')->constrained('table_kemajuan');
            $table->foreignId('FK_Id_bab')->constrained('table_bab');
            $table->longText('keterangan');
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
        Schema::dropIfExists('detailkemajuan');
    }
}
