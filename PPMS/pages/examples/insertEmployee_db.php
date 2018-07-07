<?php
  ob_start();
  include("db.php");
 
	$employee_id=mysql_real_escape_string($_POST['employee_id']);	
	$employee_type=mysql_real_escape_string($_POST['employee_type']);
    $firstname=mysql_real_escape_string($_POST['firstname']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$email=mysql_real_escape_string($_POST['email']);
	$mobile=mysql_real_escape_string($_POST['mobile']);
	$address=mysql_real_escape_string($_POST['address']);
	$password=mysql_real_escape_string($_POST['password']);	
	
	$update=mysql_query("INSERT INTO bacmember(employee_id,employee_type,firstname,lastname,email,mobile,address,password)VALUES
									  ('$employee_id','$employee_type','$firstname','$lastname','$email','$mobile','$address','$password')");
											
	if (!$update) 
	{
		die('Invalid query: ' . mysql_error());
	}
	if($update)
	{
	  $msg="Registration successful";
	  $_SESSION["success_registration"] = $msg;
	  //echo $_SESSION["success_registration"];
	  header("Location: {$_SERVER['HTTP_REFERER']}");
	  //header("Location:bac_registration.html");  
	}
	else
	{
	  $errormsg="Something went wrong, Try again";	  
	  $_SESSION["success_registration"] = $errormsg;
	  header("Location: {$_SERVER['HTTP_REFERER']}");
	  //header('Location:bac_registration.html');  
	}
 ob_end_flush();
?>