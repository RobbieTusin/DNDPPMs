<?php
  ob_start();
  include("db.php");
   
	$enduserid=mysql_real_escape_string($_POST['enduserid']);	
	$endusercat=mysql_real_escape_string($_POST['endusercat']);
	$enduserabbre=mysql_real_escape_string($_POST['enduserabbre']);
	
	$update=mysql_query("INSERT INTO enduser(enduserid,endusercat,enduserabbre)VALUES
									  ('$enduserid','$endusercat','$enduserabbre')");						  
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
	  header('Location:dataentry_enduser.html');
  }
 ob_end_flush();
?>