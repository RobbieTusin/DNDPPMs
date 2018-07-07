<?php
  ob_start();
  include("db.php");
  
  
	$procurementid=mysql_real_escape_string($_POST['procurementid']);	
	$modeofprocurement=mysql_real_escape_string($_POST['modeofprocurement']);
	$projectname=mysql_real_escape_string($_POST['projectname']);

	$ApproveBudget=mysql_real_escape_string($_POST['ApproveBudget']);
	$posting=mysql_real_escape_string($_POST['posting']);
	$preproc=mysql_real_escape_string($_POST['preproc']);
	$prebid=mysql_real_escape_string($_POST['prebid']);
	$endusercat=mysql_real_escape_string($_POST['endusercat']);

	
	
	$update=mysql_query("INSERT INTO procurement(procurementid,modeofprocurement,projectname,ApproveBudget,posting,preproc,prebid,enduser)VALUES
									  ('$procurementid','$modeofprocurement','$projectname','$ApproveBudget','$posting','$preproc','$prebid','$endusercat')");						  
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
	  header('Location:procurement.html');
  }
 ob_end_flush();
?>