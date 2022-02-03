<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CrearUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        DB::connection('users')->table('users')->insert([
            'name' => 'marcelo',
            'name2' => 'juan',
            'surname' => 'carrasco',
            'surname2' => 'nuñez',
            'email' => 'marcelo@gmail.com',
            'password' => bcrypt('admin123'),
            'rol' => 'admin'
        ]);
    }
}


