<?php

namespace Database\Factories;
use \App\Models\Patient;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->lastname(),
            'prenom' => fake()->Firstname(),
            'date_naissance' => fake()->date(),
            'telephone' => fake()->numberBetween(),
            'poids' => fake()->longitude($min = 5, $max =100),
            'taille' => fake()->randomDigit($min = 50, $max = 100),
            'groupe_sanguin' => fake()->word(),
            'antecedants_medicaux' => fake()->text(),
           
        ];
    }
}
