<?php
use PHPUnit\Framework\TestCase;
require 'login.php';

class LoginTest extends TestCase {
	public function testLogin(): void
	{
		$this->assertTrue(isValidCreds("araradacius", "letmein"));
	}
}
