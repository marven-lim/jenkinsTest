<?php
use PHPUnit\Framework\TestCase;
include 'checkpw.php';

final class checkpwtest extends TestCase
{
	public function test_credentials(): void
	{
		$this->assertTrue(isValidCreds("araradacius","letmein"));
	}
}

?>
