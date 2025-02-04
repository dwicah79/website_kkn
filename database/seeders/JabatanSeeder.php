<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $jabatans = [
            'Kepala Dusun',
            'Ketua RW 1',
            'Ketua RW 2',
            'Ketua RT 1',
            'Ketua RW 2',
            'Ketua RT 3',
            'Ketua RW 4',
            'Ketua Pemuda',
            'Wakil Ketua Pemuda',
            'Sekretaris',
            'Bendahara',
            'Ketua PKK',
            'Wakil Ketua PKK',
            'Anggota',
        ];

        foreach ($jabatans as $jabatan) {
            \App\Models\Jabatan::create([
                'name' => $jabatan,
            ]);
        }
    }
}
