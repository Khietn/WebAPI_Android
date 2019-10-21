<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nguoi_choi')->insert([
            ['ten_dang_nhap'=>'chanhsau', 'mat_khau'=>'dumo513',
            'email'=>'asdasd@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>999,
            'credit'=>9999],
            ['ten_dang_nhap'=>'tienkhiem', 'mat_khau'=>'khiem123',
            'email'=>'khiem123@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>999,
            'credit'=>9999],
            ['ten_dang_nhap'=>'trungkhiet', 'mat_khau'=>'trungkhiet123',
            'email'=>'trungkhiet123@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>999,
            'credit'=>9999] ]);
    }
}
