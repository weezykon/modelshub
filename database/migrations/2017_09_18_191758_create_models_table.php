<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->int('user_id');
            $table->string('phone');
            $table->text('address');
            $table->date('dob');
            $table->text('bio');
            $table->varchar('gender');
            $table->text('languages');
            $table->text('modeltype');
            $table->varchar('website');
            $table->varchar('state');
            $table->varchar('country');
            $table->varchar('town');
            $table->integer('chest');
            $table->integer('waist');
            $table->integer('height');
            $table->integer('shoe');
            $table->varchar('eye');
            $table->varchar('hair');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
