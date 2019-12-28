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
            ['ten_dang_nhap'=>'chanhsau4', 'mat_khau'=>'chanhsau4',
            'email'=>'asdasd@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>500,
            'credit'=>500],
            ['ten_dang_nhap'=>'chanhsau5', 'mat_khau'=>'chanhsau5',
            'email'=>'khiem123@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>600,
            'credit'=>600],
            ['ten_dang_nhap'=>'chanhsau6', 'mat_khau'=>'chanhsau6',
            'email'=>'trungkhiet123@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>700,
            'credit'=>700],
            ['ten_dang_nhap'=>'chanhsau7', 'mat_khau'=>'chanhsau7',
            'email'=>'khiem123@gmail.com','hinh_dai_dien'=>'',
            'diem_cao_nhat'=>800,
            'credit'=>800] ]);
    }
}
