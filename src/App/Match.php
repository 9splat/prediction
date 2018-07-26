<?php

namespace App;

class Match {


	public $homeTeam;


	public function setHomeTeam($homeTeam) 
	{
		$this->homeTeam = $homeTeam;
	}

	public function getHomeTeam() 
	{
		return $this->homeTeam;
	}

}