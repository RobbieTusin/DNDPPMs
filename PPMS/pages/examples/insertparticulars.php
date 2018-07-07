<?php
  ob_start();
  include("db.php");

	$expenseclass=mysql_real_escape_string($_POST['expenseclass']);
	$particulars_code=mysql_real_escape_string($_POST['particulars_code']);	
	$particulars_name=mysql_real_escape_string($_POST['particulars_name']);
    
	
	
	$update=mysql_query("INSERT INTO particulars(expenseclass,particulars_code,particulars_name)VALUES
									  ('$expenseclass','$particulars_code','$particulars_name')");
											
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
	  header('Location:dataentry_particulars.html');
  }
 ob_end_flush();
?>