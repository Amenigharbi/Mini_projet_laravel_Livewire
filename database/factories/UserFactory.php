<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname,
            'prenom' => $this->faker->firstname,
            'sexe' => ['H', 'F'][array_rand(['H', 'F'])],
            'email' => $this->faker->unique()->safeEmail(),
             'telephone1'=>$this->faker->unique()->phoneNumber(),
             'telephone2'=>$this->faker->unique()->phoneNumber(),
             'pieceIdentite'=>array_rand(['cni','passport','permis de conduite'],1),
             'numeroPieceIdentite'=>$this->faker->unique()->bankAccountNumber,
             'photo'=>$this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
