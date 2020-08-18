<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('area_id')->nullable();
            $table->timestamps();
        });

        DB::table('stops')->insert([
            ["name"=>"Siegwalden Lido","area_id"=>1],
            ["name"=>"Siegwalden","area_id"=>1],
            ["name"=>"Siegwalden - Larch Street","area_id"=>1],
            ["name"=>"Oakville - Central","area_id"=>2],
            ["name"=>"Oakville","area_id"=>2],
            ["name"=>"Oak Street","area_id"=>2],
            ["name"=>"Old Sawmill","area_id"=>2],
            ["name"=>"Mediacenter Astra","area_id"=>3],
            ["name"=>"Stocker Square","area_id"=>3],
            ["name"=>"Grenus Square","area_id"=>3],
            ["name"=>"Astra Promenade","area_id"=>3],
            ["name"=>"Zellermann Research Center","area_id"=>3],
            ["name"=>"Northspoke","area_id"=>3],
            ["name"=>"Southspoke","area_id"=>3],
            ["name"=>"Westspoke","area_id"=>3],
            ["name"=>"Eastspoke","area_id"=>3],
            ["name"=>"Shipwright's Alley","area_id"=>4],
            ["name"=>"Boos Corp Warehouses","area_id"=>4],
            ["name"=>"Water Treatment Plant","area_id"=>4],
            ["name"=>"Harbor - Distribution Center","area_id"=>4],
            ["name"=>"Ressel Warehouses","area_id"=>5],
            ["name"=>"Harbor Administration","area_id"=>5],
            ["name"=>"Oil Harbor - South","area_id"=>5],
            ["name"=>"Oil Harbor - North","area_id"=>5],
            ["name"=>"Harbor - Pier 3","area_id"=>5],
            ["name"=>"Harbor - Pier 1","area_id"=>5],
            ["name"=>"Hayscales","area_id"=>6],
            ["name"=>"Sugar Mill","area_id"=>6],
            ["name"=>"Corn Street - Agriculture Center","area_id"=>6],
            ["name"=>"Nurtivore Research Labs","area_id"=>6],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stops');
    }
}
