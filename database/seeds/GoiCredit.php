<?php

use Illuminate\Database\Seeder;

class GoiCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_goi_credit')->insert(['ten_goi'=>'Người mới', 'credit'=>100, 'so_tien'=>20000]);
    }
}
