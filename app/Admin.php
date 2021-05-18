<?php

namespace App;

class Admin
{
	public $name;
	public $password;


	public function setName($Name)
	{
		$this->name = $Name;

	}

	public function getName()
	{
		return $this->name;
        
	}

    public function setPassword($Password)
	{
		$this->password = $Password;

	}

	public function getPassword()
	{
		return $this->password;
        
	}


	

}