<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phongs')->insert([
        ['id_phong' => 1, 'name_phong' => 'Phòng Kinh Doanh'],
        ['id_phong' => 2, 'name_phong' => 'Phòng Kế Toán'],
        ['id_phong' => 3, 'name_phong' => 'Phòng Kỹ Thuật'],
    ]);

    }
}
