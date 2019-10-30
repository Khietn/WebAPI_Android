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
        App\QuanTriVienModel::create([
            'ten_dang_nhap'=>'admin',
            'mat_khau'=> Hash::make('admin'),
             'ho_ten'=>'Vo Tien Khiem'
        ]);
        //DB::table('_quan_tri_vien')->insert([ 'ten_dang_nhap'=>'khiet', 'mat_khau'=>'123', 'ho_ten'=>'Nguyen Trung Khiet']);
    }
    
  
}
