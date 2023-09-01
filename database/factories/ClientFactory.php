<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{

    protected $model=Client::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ville=$this->faker->city;
        $pays=$this->faker->country;
        return [
            "nom"=>$this->faker->lastName,
            "prenom"=>$this->faker->firstName(),
            "sexe"=>array_rand(['H','F'],1),
            "dateNaiss"=>$this->faker->dateTimeBetween("1980-01-01","2001-12-31"),
            "LieuNaiss"=>"$pays,$ville",
            "nationalité"=>$this->faker->country,
            "pays"=>$pays,
            "ville"=>$ville,
            "adresse"=>$this->faker->address,
            "telephone1"=>$this->faker->phoneNumber(),
            "telephone2"=>$this->faker->phoneNumber(),
            "pieceIdentite"=>array_rand(["CNI","passport","permis de conduire"],1),
            "numeroPieceIdentite"=>$this->faker->creditCardNumber,
        ];
    }
}
