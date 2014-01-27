<?php 
function loginCheck() {
	if(!isset($_SESSION['userName'])){
		header('Location: login/loginForm.php');//header(string,replace,http_response_code)
		exit();		
	} //end if
} //end function




?>