<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
 /* o seeder e utilizado para criar automaticamente um determinado dado, para que ele rode corretamente, deve-se adicionar os seeders a serem rodados em databaseseeder */

 /* para rodar o seeder o comando e: php artisan db:seed */
        User::create([
            'name' => 'Rodrigo Ferreira',
            'email' => 'eusereirco@comcerteza.com',
            'password' => Hash::make('123456')
        ]);
    }
}
