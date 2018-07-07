<?php
  ob_start();
  include("db.php");
   
	$mode_id=mysql_real_escape_string($_POST['mode_id']);	
    $modeofprocurement=mysql_real_escape_string($_POST['modeofprocurement']);
	$ApproveBudget=mysql_real_escape_string($_POST['ApproveBudget']);
	
	
	$update=mysql_query("INSERT INTO moprocurement(modeofprocurement, ApproveBudget)VALUES
									  ('$modeofprocurement','$ApproveBudget')");						  
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
	  header('Location:dataentry_mode.html');
  }
 ob_end_flush();
?>
