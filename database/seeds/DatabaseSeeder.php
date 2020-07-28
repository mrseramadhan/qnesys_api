<?php

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
        // $this->call(UserSeeder::class);
        DB::table('ms_hotel')->insert([
            'id_perusahaan' => (int)rand(1, 10),
            'nama_hotel' => 'Mawar Hotel',
            'alamat_hotel' => Str::random(255),
            'telepon_hotel' => '+62 8779897798789',
            'kode_pos' => (int)rand(1, 10),
            'kode_provinsi' => (int)rand(1, 10),
            'kode_kabupaten' => (int)rand(1, 10),
            'kode_kelurahan' => (int)rand(1, 10),
            'npwp' => (int)rand(1, 10),
            'pkp_npkp' => true,
            'koordinat_map' => '41.40338, 2.17403',
            'pict_map' => 'assets/img/pict_map/test.png',
            'logo_hotel' => 'assets/img/logo/logo_hotel.png',
            'wallpaper' => 'assets/img/wallpaper/wallpaper.png',
        ]);
    }
}
