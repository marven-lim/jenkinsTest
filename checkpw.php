<?php
function isValidCreds($uname, $pw){
	if ($uname==="araradacius"){
		if ($pw === "letmein"){
			return true;
		}
	}
	return false;
}
?>