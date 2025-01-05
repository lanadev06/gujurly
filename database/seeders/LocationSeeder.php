<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            [null, 'UNW'],
            [null, 'ANW'],
            [1, 'A1'],
            [1, 'A2'],
            [1, 'A3'],
            [1, 'A4'],
            [1, 'B5'],
            [1, 'B7'],
            [1, 'D3'],
            [1, 'D1'],
            [1, 'D2'],
            [1, 'D6'],
            [2, 'C1'],
            [2, 'C2'],
            [2, 'C3'],
            [2, 'C4'],
            [2, 'K1'],
            [2, 'K5'],
            [2, 'E5'],
            [2, 'E3'],
            [2, 'E9'],
            [2, 'K4'],
        ];

        foreach ($objs as $obj) {
            Location::create([
                'parent_id' => $obj[0],
                'name' => $obj[1],
            ]);
        }
    }
}
