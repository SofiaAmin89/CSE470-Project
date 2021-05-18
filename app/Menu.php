<?php

namespace App;

class Menu
{
	public $name;
	public $price;


	public function setName($Name)
	{
		$this->name = $Name;

	}

	public function getName()
	{
		return $this->name;
        
	}

    public function setPrice($Price)
	{
		$this->price = $Price;

	}

	public function getPrice()
	{
		return $this->price;
        
	}


	

}