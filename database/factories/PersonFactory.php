<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
            'name'=>$faker->name(),
            'surname'=>$faker->lastName(),
            'phone'=>$faker->e164PhoneNumber(),
            'street'=>$faker->streetName(),
            'city'=>$faker->city(),
            'age'=>$faker->numberBetween(0, 100),
        ];
    }
}

