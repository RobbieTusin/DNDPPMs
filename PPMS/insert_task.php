<?php
  ob_start();
  include("db.php");
   
	$td_id=mysql_real_escape_string($_POST['td_id']);	
	$td_task=mysql_real_escape_string($_POST['td_task']);
    $td_user=mysql_real_escape_string($_POST['td_user']);
	
	
	
	$update=mysql_query("INSERT INTO todolist(td_id,td_task,td_user)VALUES
									  ('$td_id','$td_task','$td_user')");						  
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
	  header('Location:insert_task.php');
  }
 ob_end_flush();
?>
