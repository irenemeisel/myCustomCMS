<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/myCustomCMS/includes/functions.php');
	//logInCheck();

	//MAKE SURE THE USER HAS SELECTED A FILE BY CHECKING FOR A FILE NAME
	if($_FILES['uploadImage']['name'] == "") {
		echo("no file selected");
		exit();
	} 
	
	//EXTRACT EXTENSION INFO FROM UPLOADED FILE
	$extension = pathinfo($_FILES['uploadImage']['name'], PATHINFO_EXTENSION);
	
	//MAKE SURE THE USER HAS UPLOADED AN ACCEPTED FILE TYPE
	if ($extension != 'png' && $extension != "jpg" && $extension != "gif" && $extension != "tiff" && $extension != "tif") {
		echo ("get your shit together");
		exit();
	}
	
     $uploadImage = $_FILES['uploadImage']['name'];
	 $tmpName = $_FILES['uploadImage']['tmp_name'];
	 $newLoc = $_SERVER['DOCUMENT_ROOT']."/myCustomCMS/uploads2";
	 
	 
	if !is_dir($directory)// && is_writable($directory){
	mkdir($newLoc, 0777);
}
   	$newFileNameWithLocation = $newLoc."/newFileName.".$extension;
	 move_uploaded_file ($tmpName, $newFileNameWithLocation);
	//irene added this while she was practicing on her own 
	 echo  "Received ".$_FILES['uploadImage']['name']." - its size is ".$_FILES['uploadImage']['size'];
	
?>