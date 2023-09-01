<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//fonction creation de la table
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();//autoIncrement un champ s'appelle id et ça la clé primaire de la table
            $table->string("nom");
            $table->string("NumSerie");
            $table->string("ImageUrl")->nullable;//nullableça veut dire n'est pas obligatoire
            $table->string("estDispo")->default(1);// par defaut est disponible
            $table->foreignId("type_articles_id")->constrained("_type_articles");
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles',function(Blueprint $table)
        {
           $table->dropForeign("type_articles_id");

        });
        Schema::dropIfExists('articles');
    }
}
