<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengurus')->insert([
            "nama_pengurus" => "TPQ Banyu Urip",
            "email" => "anonim@gmail.com",
            "hp" => "081457378273",
            "gender" => "L",
            "password" => Hash::make("admin123"),
            "aktif" => "A",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table('santri')->insert([
            "nama_santri" => "User Anonim",
            "gender" => "P",
            "tanggal_lhr" => Carbon::now(),
            "kota_lhr" => Carbon::now(),
            "nama_ortu" => "Anonim Ortu",
            "alamat_ortu" => "Kebon Jeruk",
            "hp" => "081457378273",
            "email" => "user@gmail.com",
            "password" => Hash::make("user123"),
            "tanggal_masuk" => Carbon::now(),
            "aktif" => "A",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
