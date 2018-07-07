<?php
  ob_start();
  include("db.php");
  
	$copy_id=mysql_real_escape_string($_POST['copy_id']);
	$version=mysql_real_escape_string($_POST['version']);
    
	
	$update=mysql_query("INSERT INTO copyright(version)VALUES
									  ('$version')");						  
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
	  header('Location:copyright.html');
  }
 ob_end_flush();
?>
