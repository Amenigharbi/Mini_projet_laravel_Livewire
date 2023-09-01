<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("_type_articles")->insert([
          ["nom"=>"voiture"],
          ["nom"=>"immobilier"],
          ["nom"=>"salle"],
          ["nom"=>"television"],

      ]);
    }
}
