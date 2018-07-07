<?php
  ob_start();
  include("db.php");
  
	$expenseclass=mysql_real_escape_string($_POST['expenseclass']);
	$CodePAP=mysql_real_escape_string($_POST['CodePAP']);
	$expensecat=mysql_real_escape_string($_POST['expensecat']);
    $procurementprogram=mysql_real_escape_string($_POST['procurementprogram']);
	$firstprice=mysql_real_escape_string($_POST['firstprice']);
	$secondprice=mysql_real_escape_string($_POST['secondprice']);
	$thirdprice=mysql_real_escape_string($_POST['thirdprice']);	
	$companyname=mysql_real_escape_string($_POST['companyname']);
	
	$contactperson=mysql_real_escape_string($_POST['contactperson']);
	$contactnum=mysql_real_escape_string($_POST['contactnum']);
	$lastbidding=mysql_real_escape_string($_POST['lastbidding']);
	$position=mysql_real_escape_string($_POST['position']);
	

	$update=mysql_query("INSERT INTO product(expenseclass,CodePAP,expensecat,procurementprogram,firstprice,secondprice,thirdprice,companyname,contactperson,contactnum,lastbidding)VALUES
						('$expenseclass','$CodePAP','$expensecat','$procurementprogram','$firstprice','$secondprice','$thirdprice','$companyname','$contactperson','$contactperson','$contactnum','$lastbidding')");						  
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
	  header('Location:producttable.html');
  }
 ob_end_flush();
?>