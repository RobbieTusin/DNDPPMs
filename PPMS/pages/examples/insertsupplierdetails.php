<?php
  ob_start();
  include("db.php");
  
	$companyname=mysql_real_escape_string($_POST['companyname']);	
	$contactperson=mysql_real_escape_string($_POST['contactperson']);
    $contactnumber=mysql_real_escape_string($_POST['contactnumber']);
	$addressofcompany=mysql_real_escape_string($_POST['addressofcompany']);
	$philgepsreg=mysql_real_escape_string($_POST['philgepsreg']);
	$philgepsexpiry=mysql_real_escape_string($_POST['philgepsexpiry']);
	$mayorspermit=mysql_real_escape_string($_POST['mayorspermit']);
	$mayorsexpiry=mysql_real_escape_string($_POST['mayorsexpiry']);
	
	$update=mysql_query("INSERT INTO supplier(companyname,contactperson,contactnumber,addressofcompany,philgepsreg,philgepsexpiry,mayorspermit,mayorsexpiry)VALUES
									  ('$companyname','$contactperson','$contactnumber','$addressofcompany','$philgepsreg','$philgepsexpiry','$mayorspermit','$mayorsexpiry')");						  
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
	  header('Location:supplier.html');
  }
 ob_end_flush();
?>