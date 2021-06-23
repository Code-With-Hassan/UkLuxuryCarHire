<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateFleetsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('fleets',function(Blueprint $table){
            $table->increments("id");
            $table->string("car_name");
            $table->string("car_make");
            $table->text("car_description");
            $table->string("car_image1")->nullable();
            $table->string("car_image2")->nullable();
            $table->string("car_image3")->nullable();
            $table->string("car_image4")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fleets');
    }

}