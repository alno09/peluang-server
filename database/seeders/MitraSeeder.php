<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mitra;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Mitra::create([
                'nama_mitra' => $faker->company,
                'desc_mitra' => $faker->sentence,
                'hrg_mulai_mitra' => $faker->numberBetween($min = 10000000, $max = 600000000),
                'bep_mitra' => $faker->randomDigit(),
                'cabang_mitra' => $faker->randomDigit()
            ]);
        }
    }
}
