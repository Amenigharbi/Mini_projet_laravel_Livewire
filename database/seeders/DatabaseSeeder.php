<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(TypeArticle::class);
        Article::factory(10)->create();
        Client::factory(10)->create();
        User::factory(10)->create();


        $this->call(RoleTableSeeder::class);
        $this->call(statut_Location::class);
        $this->call(permissionsSeeder::class);
        $this->call(DureeLocationSeeder::class);

        //recupere l'utilisateur qui a l'id 1 donne le role de l'id 1
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(2);
        User::find(5)->roles()->attach(1);
        User::find(6)->roles()->attach(2);
        User::find(7)->roles()->attach(3);
        User::find(8)->roles()->attach(4);
        User::find(9)->roles()->attach(1);
        User::find(10)->roles()->attach(2);

        //autrement
        /*
        $user=User::find(1);
        $role=Role::find(1);
        DB::table("user_role")->insert(
            [
                "user_id"=>$user->id,
                "role_id"=>$role->id
            ]
            );
        */

    }
}
