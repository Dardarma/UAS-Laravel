<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class usersseeder extends Seeder
{

    public function run(): void
    {
        Users::create([
            'nama' => 'muhammad alexius xaverius',
            'email' => 'muhxaverius@gmail.com',
            'password' => '123456',
            'role' => 'admin',
            'Hp' => '08123456789',]);

        Users::create([
           'nama' => 'Gatot Santoso',
            'email' => 'coba@gmail.com',
            'password' => bcrypt('123456'),
            'Hp' => '08123456789',
        ]);
    }
}
