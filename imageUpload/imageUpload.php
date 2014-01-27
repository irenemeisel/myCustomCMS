<?php
	session_start();
	include('includes/functions.php');
	//logInCheck();
	// imageUpload/index.php = image upload form
?>


<?php include('includes/header.php'); ?>

<div class="userInstruction">Allowed file types: PNG, JPG, GIF, TIFF</div>
<form name="form1" action="postControls/addImage.php" enctype="multipart/form-data" method="post">
	<label for="uploadImage">Pick a File</label>
	<input type="file" name="uploadImage" />
	<input type="submit" value="beam me up" />
	
</form>

<?php include('includes/footer.php'); ?>