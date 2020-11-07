<?php

use Illuminate\Database\Seeder;

class DataAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_admin')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'nama' => 'Admin Silaser',
            'email' => 'admin@silaser.com',
        ]);
    }
}
