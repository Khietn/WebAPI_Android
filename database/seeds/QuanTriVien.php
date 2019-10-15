<?php

use Illuminate\Database\Seeder;

class QuanTriVien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_quan_tri_vien')->insert([ 'ten_dang_nhap'=>'khiet', 'mat_khau'=>'123', 'ho_ten'=>'Nguyen Trung Khiet']);
    }
    
  
}
