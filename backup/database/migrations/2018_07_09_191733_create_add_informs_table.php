<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddInformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_informs', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('title');
            $table->timestamps();

            $table->string('email',40);
            $table->string('first_name',40);
            $table->string('last_name',40);
            $table->string('patronymic',40);
            $table->enum('visa', ['YES', 'NO']);
            $table->enum('sex', ['M', 'F']);
            $table->string('nationality',40);
            $table->date('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_informs');
    }
}
