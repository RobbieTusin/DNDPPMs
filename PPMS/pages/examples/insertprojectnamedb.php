<?php
  ob_start();
  include("db.php");
  
	//$projectid=mysql_real_escape_string($_POST['projectid']);	
	$companyname=mysql_real_escape_string($_POST['companyname']);
    $projectname=mysql_real_escape_string($_POST['projectname']);
	 
	echo "I am here";
	$update=mysql_query("INSERT INTO projectname(companyname,projectname)VALUES
									  ('$companyname','$projectname')");						  
		if (!$update) {
    die('Invalid query: ' . mysql_error());
}
	echo "SHIT";
	if($update)
  {
	  $msg="Order Comfirm!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header("Location: {$_SERVER['HTTP_REFERER']}");
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  header('Location:projectname.html');
  }
 ob_end_flush();
?>