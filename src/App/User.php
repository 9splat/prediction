<?php

namespace App;

class User {

	public $firstName;
	public $lastName;
	public $email;

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}	

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}	

	public function getLastName()
	{
		return $this->lastName;
	}
	
	public function setEmail($email)
	{
		$this->email = $email;
	}	

	public function getEmail()
	{
		return $this->email;
	}

	public function isValid()
	{
		if(empty($this->firstName)) {
			throw new Exception("First Name Required");
		}

		if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) { 
			throw new Exception("Invalid Email");
		}

		return true;
	}

	public function register()
	{

		$query = "insert into users(first_name, last_name, email ) values('". $this->firstName ."', '". $this->lastName."', '". $this->email."')";	
		$connection = mysqli_connect('localhost', 'root','', 'worldcup');
		mysqli_query($connection, $query);
	}

}