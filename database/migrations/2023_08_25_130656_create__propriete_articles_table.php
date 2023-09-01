<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_propriete_articles', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->boolean("estOblig")->default(1);
            $table->foreignId("_type_articles_id")->constrained("_type_articles");
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
        Schema::table('__propriete_articles',function(Blueprint $table)
        {
           $table->dropForeign("_type_articles_id");

        });
        Schema::dropIfExists('_propriete_articles');
    }
}
