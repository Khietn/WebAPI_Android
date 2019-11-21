<?php

use Illuminate\Database\Seeder;

class CauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cau_hoi')->insert([
            'noi_dung'=>'1+1=?', 'linh_vuc_id'=>'1', 'phuong_an_a'=>'2',
            'phuong_an_b'=>'3','phuong_an_c'=>'4','phuong_an_d'=>'5',
            'dap_an'=>'A','xoa'=>'0'
            ]);
        DB::table('cau_hoi')->insert([
                'noi_dung'=>'1+2=?', 'linh_vuc_id'=>'1', 'phuong_an_a'=>'2',
                'phuong_an_b'=>'3','phuong_an_c'=>'4','phuong_an_d'=>'5',
                'dap_an'=>'B','xoa'=>'0'
        ]);
        DB::table('cau_hoi')->insert([
            'noi_dung'=>'3+4=?', 'linh_vuc_id'=>'1', 'phuong_an_a'=>'3',
            'phuong_an_b'=>'6','phuong_an_c'=>'9','phuong_an_d'=>'7',
            'dap_an'=>'D','xoa'=>'0'
        ]);
    }
}
