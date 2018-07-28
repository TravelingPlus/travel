<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function (Blueprint $table) {
            $table->string('email',40);
            $table->string('first_name',40);
            $table->string('last_name',40);
            $table->string('patronymic',40);
            $table->enum('visa', ['M', 'F']);
            $table->enum('sex', ['YES', 'NO']);
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
        Schema::dropIfExists('users_info');
    }
}
