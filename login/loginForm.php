<?php 

include('includes/header.php');

?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 

<form id='login' action='loginScript.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
 <input type='submit' name='Submit' value='Submit' /> 
<div class="button submit">SUBMIT FORM</div>
 
</fieldset>
</form>	
<div class="error" style="display: none;">Your login credentials are incorrect.</div>


<?php 
	include('includes/footer.php');
?>