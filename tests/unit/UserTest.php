<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

	
		

	public function testGetName()
	{
		$this->user = new \App\User;
		$this->user->setName('Ramisa');

		$this->assertEquals($this->user->getName(), 'Ramisa');
	}

	public function testGetPassword()
	{
		$this->user = new \App\User;
		$this->user->setPassword('100');

		$this->assertEquals($this->user->getPassword(), '100');
	}

}
