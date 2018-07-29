<?php

namespace App;

class DB {

	public function query($query) 
	{
		$connection = mysqli_connect('localhost', 'root','', 'worldcup');
		return mysqli_query($connection, $query);
	}

	public function getAll()
	{
		$query = "select * from " . $this->table;

		return $this->query($query);
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

}