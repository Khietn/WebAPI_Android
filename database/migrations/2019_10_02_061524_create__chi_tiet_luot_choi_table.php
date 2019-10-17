<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietLuotChoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('luot_choi_id');
            $table->unsignedInteger('cau_hoi_id');
            $table->string('phuong_an',5);
            $table->integer('diem');
            $table->timestamps();
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_luot_choi');
    }
}
