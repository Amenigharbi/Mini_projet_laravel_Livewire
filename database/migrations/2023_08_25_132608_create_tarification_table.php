<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarification', function (Blueprint $table) {
            $table->id();
            $table->double("prix");
            $table->foreignId("duree_location_id")->constrained('duree_location');
            $table->foreignId("article_id")->constrained('articles');
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
        Schema::table('tarification',function(Blueprint $table)
        {
           $table->dropForeign(["duree_location_id","article_id"]);
        });
        Schema::dropIfExists('tarification');

    }
}
