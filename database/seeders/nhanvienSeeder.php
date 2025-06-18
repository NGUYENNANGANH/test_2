<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nhanvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhanviens')->insert([
            ['name_nv' => 'Nguyen Van A', 'mota' => 'Nhan vien kinh doanh', 'birthday' => '1990-01-01', 'id_phong' => 1],
            ['name_nv' => 'Tran Thi B', 'mota' => 'Nhan vien ke toan', 'birthday' => '1992-02-02', 'id_phong' => 2],
            ['name_nv' => 'Le Van C', 'mota' => 'Nhan vien ky thuat', 'birthday' => '1994-03-03', 'id_phong' => 3],
        ]);
         
    }
}
