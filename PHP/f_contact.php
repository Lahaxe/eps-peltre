<?php
	function VerifierAdresseMail($adresse)
	{
		$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
		if(preg_match($Syntaxe,$adresse))
			return true;
		else
			return false;
	}
  ?>