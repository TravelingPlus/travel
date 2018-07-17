<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saves', function (Blueprint $table) {
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

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saves');
    }
}
