<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'summary' => $this->faker->sentence,
            'frameworks' => [
                [
                    'name' => 'Laravel',
                    'level' => 'Principiante',
                    'year' => '2023',
                ],
                [
                    'name' => 'Vue.js',
                    'level' => 'Principiante',
                    'year' => '2023',
                ],
            ],
            'hobbies' => [
                [
                    'name' => 'Videojuegos',
                    'description' => 'Jugar varios videojuegos con amigos',
                ],
                [
                    'name' => 'Deportes',
                    'description' => 'Realizar varios deportes como el Futbol, Voleibol, Ping-pong, entre otros.',
                ],
            ],
        ];
    }
}
