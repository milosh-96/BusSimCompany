<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('route_id');
            $table->integer('user_id');
            $table->integer('morning')->default(10);
            $table->integer('daytime')->default(7);
            $table->integer('evening')->default(7);
            $table->integer('night')->default(10);
            $table->integer('rush_hour')->default(5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetables');
    }
}
