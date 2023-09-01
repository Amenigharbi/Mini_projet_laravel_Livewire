<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("duree_location")->insert(
         [
            ["libelle"=>"journée","valeurEnHeure"=>24],
            ["libelle"=>"DemiJournée","valeurEnHeure"=>12]
         ]
        );
    }
}
