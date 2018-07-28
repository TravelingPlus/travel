<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userstrip', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps();
            $table->string('origin',40);
            $table->string('destination',40);
            $table->integer('price');
            $table->integer('transfers');
            $table->string('airline',40);
            $table->string('flight_number',40);
            $table->dateTime('departure_at');
            $table->dateTime('return_at');
            $table->dateTime('expires_at');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_trip');
    }
}
