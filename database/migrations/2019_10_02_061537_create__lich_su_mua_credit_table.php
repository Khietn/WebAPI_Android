<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichSuMuaCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_credit', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->unsignedInteger('goi_credit_id');
            $table->integer('credit');
            $table->integer('so_tien');
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
        Schema::dropIfExists('lich_su_mua_credit');
    }
}
