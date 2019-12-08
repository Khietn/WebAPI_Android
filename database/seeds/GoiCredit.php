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
        DB::table('goi_credit')->insert(['ten_goi'=>'Người mới', 'credit'=>100, 'so_tien'=>20000]);
        DB::table('goi_credit')->insert(['ten_goi'=>'Khuyến mãi', 'credit'=>200, 'so_tien'=>30000]);
        DB::table('goi_credit')->insert(['ten_goi'=>'Giảm Giá', 'credit'=>400, 'so_tien'=>40000]);
    }
}
