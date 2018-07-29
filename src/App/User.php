<?php

namespace App;

class User extends DB{

	public $id;
	public $firstName;
	public $lastName;
	public $email;
	public $username;
	public $password;
	public $table = 'users';

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

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

	public function setUsername($username)
	{
		$this->username = $username;
	}	

	public function getUsername()
	{
		return $this->username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}	

	public function getPassword()
	{
		return $this->password;
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
		$query = "insert into users(first_name, last_name, email, username, password ) values('". $this->firstName ."', '". $this->lastName."', '". $this->email."','".$this->username."','".$this->password."')";	
		
		return $this->query($query);
	}

	public function getAll()
	{
		$result = parent::getAll();
		$users = [];
		while( $row = mysqli_fetch_assoc($result)){

			$thisUser = new User();
			$thisUser->setId($row['id']);
			$thisUser->setFirstName($row['first_name']);
			$thisUser->setLastName($row['last_name']);
			$users[] = $thisUser;
		}

		return $users;
	}

}