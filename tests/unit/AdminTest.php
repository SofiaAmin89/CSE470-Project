<?php

class AdminTest extends \PHPUnit\Framework\TestCase
{

	protected $admin;

	
		

	public function testGetName()
	{
		$this->admin = new \App\Admin;
		$this->admin->setName('Sami');

		$this->assertEquals($this->admin->getName(), 'Sami');
	}

	public function testGetPassword()
	{
		$this->admin = new \App\Admin;
		$this->admin->setPassword('300');

		$this->assertEquals($this->admin->getPassword(), '300');
	}

	
}