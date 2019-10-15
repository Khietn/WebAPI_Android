<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotChoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('nguoi_choi_id');
            $table->integer('so_cau');
            $table->integer('diem');
            $table->date('ngay_gio');
            $table->timestamps();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luot_choi');
    }
}
