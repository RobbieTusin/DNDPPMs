<?php
  ob_start();
  include("db.php");
   
	$signatoryid=mysql_real_escape_string($_POST['signatoryid']);	
	$fullname=mysql_real_escape_string($_POST['fullname']);
    $position=mysql_real_escape_string($_POST['position']);
	
	
	
	$update=mysql_query("INSERT INTO signatories(signatoryid,fullname,position)VALUES
									  ('$signatoryid','$fullname','$position')");						  
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
	  header('Location:signatoryform.php');
  }
 ob_end_flush();
?>
