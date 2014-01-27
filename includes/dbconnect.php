<?php
	//connect to the MyCustomCMS database with these credentials
	@ $db = mysql_pconnect("localhost", "root", "root");
	mysql_select_db("MyCustomCMS");

	//show an error if no connection was made
	if(!$db) {
	//	echo ("No connection to the database could be made");
		exit;		
	} else {
//		echo("Connected to Database!!");
		
		
	}
	
?>