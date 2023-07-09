<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            'Toyota',
            'Audi',
            'Hyundai',
            'BMW',
            'Nissan',
            'Lada',
            'Mercedes-Benz',
            'Lexus',
        ];

        foreach ($seasons as $season) {
            $obj = new Season();
            $obj->name = $season;
            $obj->save();
        }
    }
}
