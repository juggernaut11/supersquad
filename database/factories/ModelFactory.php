<?php

namespace Database\Factories;

use Framework\Models\User;
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
    $factory->define(Framework\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'display_name' => $faker->name,
        'photo' => '',
        'birth_year' => 1999,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
}
