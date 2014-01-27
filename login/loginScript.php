<?php 
ini_set('display_errors', '1');
error_reporting(E_ALL);
include('/Applications/MAMP/htdocs/myCustomCMS/includes/dbconnect.php');	
$userName = $_POST['username'];
$pass = md5($_POST['password']);

$sql = "SELECT userName
FROM users
WHERE userName = '$userName'
AND  password = '$pass'";

$result = mysql_query($sql);
$num_results = mysql_num_rows($result);
if($num_results < 1) {
	echo "try again!";
}else {
	


		session_start();
		$_SESSION['userName'] = "$userName";
	header("Location: ../index.php");
}
/*	echo "hello world";	
 *	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
	
	else 
	{
		session_start();
		//$_SESSION['login'] = "1";
		//$row = mysql_fetch_assoc['$result'];
		//$_SESSION['userName'] = $row['userName'];
	//	$_SESSION['userName'] = "Irene";
	//	echo "phooey";
		header("Location: www.google.com");
	
				
	}*/
	
?>