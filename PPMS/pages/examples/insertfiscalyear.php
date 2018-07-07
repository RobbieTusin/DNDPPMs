<?php
  ob_start();
  include("db.php");
  
	$fiscalno=mysql_real_escape_string($_POST['fiscalno']);
	$fiscalyear=mysql_real_escape_string($_POST['fiscalyear']);
    
	
	$update=mysql_query("INSERT INTO fiscalyear (fiscalyear)VALUES
									  ('$fiscalyear')");						  
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
	  header('Location:fiscalyear.html');
  }
 ob_end_flush();
?>