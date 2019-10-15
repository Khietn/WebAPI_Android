<?php

use Illuminate\Database\Seeder;

class LinhVuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('_linh_vuc')->insert(['name'=>'value', ...=>...]);
        DB::table('_linh_vuc')->insert(['ten'=>'Địa lý']);
    }
}
