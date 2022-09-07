<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        /* o factory e uma fabrica de dados onde voce especifica o que deve ser criado e utiliza no DataBaseseeder */
        return [
            //
            'title' => $this->faker->text(30),
            'color' => $this->faker->safeHexColor(),
            'user_id' => '1'
        ];
    }
}
