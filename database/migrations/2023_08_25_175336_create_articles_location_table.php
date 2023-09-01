<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_location', function (Blueprint $table) {
            $table->foreignId("article_id")->constrained("articles");
            $table->foreignId("location_id")->constrained('locations');

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
        Schema::table('articles_location',function(Blueprint $table)
        {
           $table->dropForeign(["article_id","location_id"]);
        });
        Schema::dropIfExists('articles_location');
    }
}
