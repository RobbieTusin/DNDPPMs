<?php
  ob_start();
  include("db.php");
  
	$unitno=mysql_real_escape_string($_POST['unitno']);
	$unit=mysql_real_escape_string($_POST['unit']);
    
	
	$update=mysql_query("INSERT INTO unit (unit)VALUES
									  ('$unit')");						  
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
	  header('Location:unit.html');
  }
 ob_end_flush();
?>
