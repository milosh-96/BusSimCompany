<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('areas')->insert([
            ["name"=>"Siegwalden"],
            ["name"=>"Oakville"],
            ["name"=>"Astra Park"],
            ["name"=>"Industry Zone"],
            ["name"=>"Port Amber"],
            ["name"=>"Agricultural Zone"],
            ["name"=>"Seaside Valley"],
            ["name"=>"Westfield"],
            ["name"=>"Steineck"],
            ["name"=>"Sonnstein"],
            ["name"=>"Kerststadt"],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
