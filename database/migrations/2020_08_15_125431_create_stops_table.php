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
            ["name"=>"Nutrivore Research Labs","area_id"=>6],
            ["name"=>"Central Bus Station","area_id"=>7],
            ["name"=>"Radovanovic Bridge","area_id"=>7],
            ["name"=>"Fisher's Grounds","area_id"=>7],
            ["name"=>"River Promenade","area_id"=>7],
            ["name"=>"Victory Road","area_id"=>7],
            ["name"=>"Roman Road","area_id"=>7],
            ["name"=>"Rose Street","area_id"=>7],
            ["name"=>"Freefield Settlement","area_id"=>7],
            ["name"=>"Sunglare Valley","area_id"=>7],
            ["name"=>"Rose Street","area_id"=>7],
            ["name"=>"Dr. Doil Street","area_id"=>7],
            ["name"=>"Lillyvale Street","area_id"=>7],
            ["name"=>"Pelter Street","area_id"=>7],
            ["name"=>"Grois Alley","area_id"=>7],
            ["name"=>"High Road","area_id"=>7],
            ["name"=>"Whisper Way","area_id"=>7],
            ["name"=>"Lindner Way","area_id"=>7],
            ["name"=>"Dr. Julius Matschner Street","area_id"=>7],
            ["name"=>"Carpenter's Gate Main Station","area_id"=>7],
            ["name"=>"Main Station","area_id"=>7],
            ["name"=>"Amber Gate","area_id"=>7],
            ["name"=>"Town Hall Park","area_id"=>7],
            ["name"=>"City Hall","area_id"=>7],
            ["name"=>"Trading Center","area_id"=>7],
            ["name"=>"Giants' Alley","area_id"=>7],
            ["name"=>"Ropewinders' Road","area_id"=>7],
            ["name"=>"Workers' Alley","area_id"=>7],
            ["name"=>"Wilten Theater","area_id"=>7],
            ["name"=>"Horsemill Alley","area_id"=>7],
            ["name"=>"Punic Alley","area_id"=>7],
            ["name"=>"Town Hall Alley","area_id"=>7],
            ["name"=>"St. Polus Inn","area_id"=>7],
            ["name"=>"Plöger Park","area_id"=>7],
            ["name"=>"Cathedral - City Center","area_id"=>7],
            ["name"=>"Old Brewery","area_id"=>7],
            ["name"=>"Railbuilders' Ridge","area_id"=>7],
            ["name"=>"Peacekogel Grange","area_id"=>7],
            ["name"=>"Westfield Corn Silos","area_id"=>8],
            ["name"=>"Westfield","area_id"=>8],
            ["name"=>"Westfield - Wanderboot Road","area_id"=>8],
            ["name"=>"Steinegger Grange","area_id"=>8],
            ["name"=>"Steineck Chapel","area_id"=>9],
            ["name"=>"Steineck West","area_id"=>9],
            ["name"=>"Steineck East","area_id"=>9],
            ["name"=>"Lower Sonnstein","area_id"=>10],
            ["name"=>"Mautner Farm","area_id"=>10],
            ["name"=>"Sonnstein Main Square","area_id"=>10],
            ["name"=>"Cellar Road","area_id"=>10],
            ["name"=>"Sonnleitner Farm","area_id"=>10],
            ["name"=>"Sun Road","area_id"=>10],
            ["name"=>"Windfield West","area_id"=>10],
            ["name"=>"Windfield East","area_id"=>10],
            ["name"=>"Miller Road","area_id"=>10],
            ["name"=>"Airport","area_id"=>10],
            ["name"=>"Wachowski Industries","area_id"=>11],
            ["name"=>"Grain Lane","area_id"=>11],
            ["name"=>"Kerststadt Dormitory","area_id"=>11],
            ["name"=>"Hill Road","area_id"=>11],
            ["name"=>"Ministry of Science","area_id"=>11],
            ["name"=>"Unger Road","area_id"=>11],
            ["name"=>"Arcos Road","area_id"=>11],
            ["name"=>"University of Technology","area_id"=>11],
            ["name"=>"Kerststadt Church","area_id"=>11],
            ["name"=>"Tyson Planetarium","area_id"=>11],
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
