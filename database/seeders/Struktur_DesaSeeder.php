<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Struktur_DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 20) as $index) {
            DB::table('dusuns')->insert([
                'name' => $faker->name(),
                'job_title_id' => $faker->numberBetween(1, 14),
                'image' => $faker->imageUrl(),
                'telp' => $faker->phoneNumber(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
