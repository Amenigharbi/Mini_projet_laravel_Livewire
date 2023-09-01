<?php

namespace Database\Factories;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model=Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            "nom"=>$this->faker->lastName(),
            "NumSerie"=>$this->faker->swiftBicNumber(),
            "ImageUrl"=>$this->faker->imageUrl(),
            "type_articles_id"=>rand(1,4),
            "estDispo"=>rand(0,1),
        ];
    }
}
