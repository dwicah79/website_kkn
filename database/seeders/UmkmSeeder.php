<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1, 100) as $index) {
            DB::table('umkms')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'thumbnail' => $faker->imageUrl(),
                'telp' => $faker->phoneNumber,
                'jenis_umkm_id' => $faker->numberBetween(1, 2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
