<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\Country;

class ClubController extends Controller
{
    public function index(){
    	$clubs = Club::where('is_winner', 1)->get();
    	$get_clubs = array();
    	$groups = array
		(
			array("Group A"),
			array("Group B"),
			array("Group C"),
			array("Group D"),
			array("Group E"),
			array("Group F"),
			array("Group G"),
			array("Group H")
		);

		$assigned_winners = [];
		$assigned_clubs = [];

		foreach($groups as $group){
			$club = Club::where('is_winner', 1)->whereNotIn('id', $assigned_winners)->inRandomOrder()->first();
			$assigned_country = $club->country_code;
			$group[] = $club->id;
			$assigned_winners[] = $club->id;
			$new_clubs = Club::where('is_winner',0)->where('country_code','!=', $assigned_country)->whereNotIn('id',$assigned_clubs)->orderBy('country_code')->inRandomOrder()->get();
			$unique = $new_clubs->unique('country_code');
			$new_clubs = $unique->values()->pluck('id')->take(3)->toArray();
			$group[] = $assigned_clubs[] = $new_clubs[0];
			$group[] = $assigned_clubs[] = $new_clubs[1];
			$group[] = $assigned_clubs[] = $new_clubs[2];			
			$get_clubs[] = $group;
		}

		return $get_clubs;
		// return view('welcome', compact('get_clubs'));
    }
}
