<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_info', function (Blueprint $table) {
            //$table->increments('id');
            //$table->timestamps();
            $table->string('email',40);
            $table->string('history_ticket',100);
            $table->date('time_out');
            $table->date('time_in');
            $table->string('money', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_info');
    }
}
