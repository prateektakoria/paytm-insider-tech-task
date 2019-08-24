<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('country_code', 3);
            $table->boolean('is_winner');
            $table->timestamps();
        });

        DB::table('clubs')->insert([ 
            [
                'name' => 'Real Madrid', 
                'country_code' => 'ESP',
                'is_winner' => 1
            ],

            [
                'name' => 'Atlético Madrid', 
                'country_code' => 'ESP',
                'is_winner' => 1
            ],

            [
                'name' => 'Bayern München', 
                'country_code' => 'GER',
                'is_winner' => 1
            ],

            [
                'name' => 'Barcelona', 
                'country_code' => 'ESP',
                'is_winner' => 1
            ],

            [
                'name' => 'Juventus', 
                'country_code' => 'ITA',
                'is_winner' => 1
            ],

            [
                'name' => 'Paris Saint-Germain', 
                'country_code' => 'FRA',
                'is_winner' => 1
            ],

            [
                'name' => 'Manchester City', 
                'country_code' => 'ENG',
                'is_winner' => 1
            ],

            [
                'name' => 'Lokomotiv Moskva', 
                'country_code' => 'RUS',
                'is_winner' => 1
            ],   

            [
                'name' => 'Borussia Dortmund', 
                'country_code' => 'GER',
                'is_winner' => 0
            ], 

            [
                'name' => 'Porto', 
                'country_code' => 'POR',
                'is_winner' => 0
            ], 

            [
                'name' => 'Manchester United', 
                'country_code' => 'ENG',
                'is_winner' => 0
            ], 

            [
                'name' => 'Shakhtar Donetsk', 
                'country_code' => 'UKR',
                'is_winner' => 0
            ], 

            [
                'name' => 'Napoli', 
                'country_code' => 'ITA',
                'is_winner' => 0
            ], 

            [
                'name' => 'Tottenham Hotspur', 
                'country_code' => 'ENG',
                'is_winner' => 0
            ], 

            [
                'name' => 'Roma', 
                'country_code' => 'ITA',
                'is_winner' => 0
            ], 

            [
                'name' => 'Liverpool', 
                'country_code' => 'ENG',
                'is_winner' => 0
            ], 

            [
                'name' => 'Schalke', 
                'country_code' => 'GER',
                'is_winner' => 0
            ], 

            [
                'name' => 'Lyon', 
                'country_code' => 'FRA',
                'is_winner' => 0
            ], 

            [
                'name' => 'Monaco', 
                'country_code' => 'FRA',
                'is_winner' => 0
            ], 

            [
                'name' => 'CSKA Moskva', 
                'country_code' => 'RUS',
                'is_winner' => 0
            ], 

            [
                'name' => 'Valencia', 
                'country_code' => 'ESP',
                'is_winner' => 0
            ],  

            [
                'name' => 'Viktoria Plzeň', 
                'country_code' => 'CZE',
                'is_winner' => 0
            ],     

            [
                'name' => 'Club Brugge', 
                'country_code' => 'BEL',
                'is_winner' => 0
            ],     

            [
                'name' => 'Galatasaray', 
                'country_code' => 'TUR',
                'is_winner' => 0
            ],     

            [
                'name' => 'Internazionale Milano', 
                'country_code' => 'ITA',
                'is_winner' => 0
            ],     

            [
                'name' => 'Hoffenheim', 
                'country_code' => 'GER',
                'is_winner' => 0
            ],     

            [
                'name' => 'Benfica', 
                'country_code' => 'POR',
                'is_winner' => 0
            ],     

            [
                'name' => 'Ajax', 
                'country_code' => 'NED',
                'is_winner' => 0
            ],     

            [
                'name' => 'PSV Eindhoven', 
                'country_code' => 'NED',
                'is_winner' => 0
            ],     

            [
                'name' => 'Young Boys', 
                'country_code' => 'SUI',
                'is_winner' => 0
            ],     

            [
                'name' => 'Crvena zvezda', 
                'country_code' => 'SRB',
                'is_winner' => 0
            ],

            [
                'name' => 'AEK Athens', 
                'country_code' => 'GRE',
                'is_winner' => 0
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
        Schema::dropIfExists('clubs');
    }
}
