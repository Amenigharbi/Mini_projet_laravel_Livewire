<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class statut_Location extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("_status_location")->insert(
            [
            ["nom"=>"en attente"],
            ["nom"=>"en cours"],
            ["nom"=>"terminée"],
            ]);
    }
}
