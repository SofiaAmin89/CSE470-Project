<?php

class MenuTest extends \PHPUnit\Framework\TestCase
{

	protected $menu;

	
		

	public function testGetName()
	{
		$this->menu = new \App\Menu;
		$this->menu->setName('Achari rice');

		$this->assertEquals($this->menu->getName(), 'Achari rice');
	}

	public function testGetPrice()
	{
		$this->menu = new \App\Menu;
		$this->menu->setPrice('300');

		$this->assertEquals($this->menu->getPrice(), '300');
	}

	
}