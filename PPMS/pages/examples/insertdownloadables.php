<?php
  ob_start();
  include("db.php");
  
	$dl_id=mysql_real_escape_string($_POST['dl_id']);
	$dl_name=mysql_real_escape_string($_POST['dl_name']);
	$dl_cat=mysql_real_escape_string($_POST['dl_cat']);
    
	
	$update=mysql_query("INSERT INTO downloadables (dl_name,dl_cat)VALUES
									  ('$dl_name','$dl_cat')");						  
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
	  header('Location:dataentry_dcat.html');
  }
 ob_end_flush();
?>