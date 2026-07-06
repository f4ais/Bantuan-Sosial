<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'nama_role' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_role' => 'RT/RW',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_role' => 'Surveyor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_role' => 'Penyalur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}