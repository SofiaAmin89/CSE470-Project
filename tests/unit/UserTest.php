<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $admin;

	
		

	public function testGetName()
	{
		$this->admin = new \App\Admin;
		$this->admin->setName('Ramisa');

		$this->assertEquals($this->admin->getName(), 'Ramisa');
	}

	public function testGetPassword()
	{
		$this->admin = new \App\Admin;
		$this->admin->setPassword('100');

		$this->assertEquals($this->admin->getPassword(), '100');
	}

}