<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*UserSeeder foi deletado para no lugar ser executado o UserFactory, para gerar mais de um usuario */

        /*$this->call([
            UserSeeder::class,
        ]);*/

        /*Isto complementa o uso do factory e cria a quantidade de dados especificados*/
        User::factory(50)->create();
        Category::factory(50)->create();
        Task::factory(30)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
