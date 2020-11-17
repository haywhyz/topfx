<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->name,
            'password' => '123456', // secret
            'utype' => $faker->numberBetween(1,3),
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'remember_token' => str_random(10),
        ];
    }
}
