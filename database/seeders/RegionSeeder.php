<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Kota Yogyakarta', 'code' => '34.17'],
            ['name' => 'Kabupaten Sleman', 'code' => '34.04'],
            ['name' => 'Kabupaten Gunung Kidul', 'code' => '34.03'],
            ['name' => 'Kabupaten Bantul', 'code' => '34.02'],
            ['name' => 'Kabupaten Kulon Progo', 'code' => '34.01'],
        ];

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }
    }
}
