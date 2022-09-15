<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::all()->random();

        while(count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            //
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'user_id' => User::all()->random(),
            'category_id' => $user->categories->random()
            /* usando o all()->random() e gerado um id randomico de acordo com a qtde de itens e ids da tabela de cagetoria
                ideal para testes
            */

            /* em cateogory_id foi acessado a o metodo usuario e dentro dele a propriedade hasmany de relacionamento*/
        ];
    }
}
