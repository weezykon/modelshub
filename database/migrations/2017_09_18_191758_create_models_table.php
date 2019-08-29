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
            $table->integer('user_id');
            $table->string('phone');
            $table->text('address');
            $table->date('dob');
            $table->text('bio');
            $table->string('gender');
            $table->text('languages');
            $table->text('modeltype');
            $table->string('website');
            $table->string('state');
            $table->string('country');
            $table->string('town');
            $table->integer('chest');
            $table->integer('waist');
            $table->integer('height');
            $table->integer('shoe');
            $table->string('eye');
            $table->string('hair');
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
