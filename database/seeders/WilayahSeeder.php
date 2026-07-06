<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('wilayah')->insert([

            // =========================
            // DATA AWAL
            // =========================

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Kota',
                'kelurahan' => 'Darat Sekip',
                'rt' => '001',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Selatan',
                'kelurahan' => 'Benua Melayu Darat',
                'rt' => '002',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Barat',
                'kelurahan' => 'Sungai Jawi',
                'rt' => '003',
                'rw' => '002',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Timur',
                'kelurahan' => 'Tambelan Sampit',
                'rt' => '001',
                'rw' => '003',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Utara',
                'kelurahan' => 'Siantan Tengah',
                'rt' => '004',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Tenggara',
                'kelurahan' => 'Bansir Laut',
                'rt' => '002',
                'rw' => '002',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // DATA TAMBAHAN
            // =========================

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Selatan',
                'kelurahan' => 'Akcaya',
                'rt' => '002',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Kota',
                'kelurahan' => 'Mariana',
                'rt' => '003',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Barat',
                'kelurahan' => 'Pal Lima',
                'rt' => '001',
                'rw' => '004',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Utara',
                'kelurahan' => 'Siantan Hulu',
                'rt' => '002',
                'rw' => '003',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Utara',
                'kelurahan' => 'Siantan Hilir',
                'rt' => '001',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Barat',
                'kelurahan' => 'Sungai Beliung',
                'rt' => '001',
                'rw' => '003',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Kota',
                'kelurahan' => 'Tengah',
                'rt' => '002',
                'rw' => '002',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Timur',
                'kelurahan' => 'Banjar Serasan',
                'rt' => '001',
                'rw' => '002',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'provinsi' => 'Kalimantan Barat',
                'kabupaten' => 'Kota Pontianak',
                'kecamatan' => 'Pontianak Tenggara',
                'kelurahan' => 'Bansir Darat',
                'rt' => '002',
                'rw' => '001',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}