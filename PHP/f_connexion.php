<?php	

function connect_to($base)
{
	$connection = mysql_connect("sql.free.fr", "rom.lahaxe", "CcWr8rD1");
	if (!$connection) {
	    die('Could not connect: ' . mysql_error());
	}
	
	if (!mysql_select_db($base)) {
	    die('Could not select database: ' . mysql_error());
	}
	
	return $connection;
}

function deconnect($connection)
{
	mysql_close($connection);
}

?>