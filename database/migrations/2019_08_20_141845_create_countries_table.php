<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->timestamps();
        });

        DB::table('countries')->insert([ 
            [
                'code' => 'ESP' 
            ],

            [
                'code' => 'GER' 
            ],

            [
                'code' => 'ITA' 
            ],

            [
                'code' => 'FRA' 
            ],

            [
                'code' => 'ENG' 
            ],

            [
                'code' => 'RUS' 
            ],

            [
                'code' => 'POR' 
            ],

            [
                'code' => 'UKR' 
            ],

            [
                'code' => 'CZE' 
            ],

            [
                'code' => 'BEL' 
            ],

            [
                'code' => 'TUR' 
            ],

            [
                'code' => 'NED' 
            ],

            [
                'code' => 'SUI' 
            ],

            [
                'code' => 'SRB' 
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
