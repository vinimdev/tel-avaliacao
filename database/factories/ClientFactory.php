<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_register_id' => rand(1, 11),
            'name' => $this->faker->name,
            'cpf' => substr(str_shuffle("0123456789"), 0, 12),
            'rg' => substr(str_shuffle("0123456789"), 0, 11),
            'birth_date' => $this->faker->dateTimeBetween('-60 years','-18 years'),
            'phone' => substr(str_shuffle("0123456789"), 0, 12),
            'state' =>  $this->faker->randomElement(['BA', 'SP'])
        ];
    }
}
