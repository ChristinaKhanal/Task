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
                    'name' =>  $this->faker->name,
                    'gender' => $this->faker->randomElement(['male','female','other']),
                    'phone' => $this->faker->phoneNumber,
                    'email' => $this->faker->unique()->safeEmail,
                    'address' => $this->faker->realText(10),
                    'nationality' => $this->faker->realText(10),
                    'dob' => $this->faker->date('Y-m-d'),
                    'education_background' => $this->faker->realText(10),
                    'mode_of_contact' => $this->faker->randomElement(['phone','email','none']),
        ];
    }
}


