<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeArticleFactory extends Factory
{
    protected $model=_type_articles::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>array_rand(["immobilier","television","salle","voiture"],1)
        ];
    }
}
