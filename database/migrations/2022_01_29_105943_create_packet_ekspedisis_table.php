<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketEkspedisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packet_ekspedisis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('packet_id')->unsigned();
            $table->integer('ekspedisi_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packet_ekspedisis');
    }
}
