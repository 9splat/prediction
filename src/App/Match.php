<?php

namespace App;

class Match extends DB {

	public $homeTeam;
	public $awayTeam;
	public $table = 'matches';

	public function setHomeTeam($homeTeam) {
		$this->homeTeam = $homeTeam;
	}

	public function getHomeTeam() {
		return $this->homeTeam;
	}

	public function setAwayTeam($awayTeam) {
		$this->awayTeam = $awayTeam;
	}

	public function getAwayTeam() {
		return $this->awayTeam;
	}

	public function create()
	{
		$query = "insert into matches( home_team, away_team) values('". $this->homeTeam . "', '". $this->awayTeam."')";
		$this->query($query);
	}

	public function getAll()
	{

		$result = parent::getAll();
		$matches = [];
		while( $row = mysqli_fetch_assoc($result)){
			$thismatch = new Match();
			$thismatch->setId($row['match_id']);
			$thismatch->setHomeTeam($row['home_team']);
			$thismatch->setAwayTeam($row['away_team']);
			$matches[] = $thismatch;
		}

		return $matches;
	}
}
