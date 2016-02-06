<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();
        $this->call(AnggotasSeeder::class);
        $this->command->info('Data Anggota Sudah Masuk Ke Database!');
        $this->call(SimpanansSeeder::class);
        $this->command->info('Data Simpanan Sudah Masuk Ke Database!');
        $this->call(RolesSeeder::class);
        $this->command->info('Data Simpanan Sudah Masuk Ke Database!');
        $this->call(UsersSeeder::class);
        $this->command->info('Data Simpanan Sudah Masuk Ke Database!');
        Model::reguard();
    }
}
