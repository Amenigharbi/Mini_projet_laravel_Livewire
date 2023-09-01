<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert(
            [
            ["nom"=>"manager","description"=>"valide"],
            ["nom"=>"employe","description"=>"valide"],
            ["nom"=>"superAdmin","description"=>"valide"],
            ["nom"=>"admin","description"=>"valide"],
            ]);
    }
}
