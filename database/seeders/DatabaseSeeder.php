<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama_kelas' => 'X TKJ-1',
            'jurusan' => 'TEKNIK KOMPUTER JARINGAN',
        ]);
    }
}
