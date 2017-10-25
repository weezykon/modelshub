<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->int('user_id');
            $table->string('phone');
            $table->text('address');
            $table->date('dob');
            $table->text('bio');
            $table->varchar('gender');
            $table->text('languages');
            $table->varchar('website');
            $table->varchar('state');
            $table->varchar('country');
            $table->varchar('town');
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
        Schema::dropIfExists('members');
    }
}
