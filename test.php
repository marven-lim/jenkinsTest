<?php
session_start();
include 'checkpw.php';

if (isValidCreds("hi", "no")){
	echo "a";
}
else
{
	echo "b";
}
?>