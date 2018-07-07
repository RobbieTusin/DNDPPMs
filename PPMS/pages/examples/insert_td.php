<?php
  ob_start();
  include("db.php");
   
	$td_id=mysql_real_escape_string($_POST['td_id']);	
	$td_list=mysql_real_escape_string($_POST['td_list']); 
	
	
	
	$update=mysql_query("INSERT INTO todolist(td_id,td_list)VALUES
									  ('$td_id','$td_list')");						  
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
	  header('Location:index.html');
  }
 ob_end_flush();
?>