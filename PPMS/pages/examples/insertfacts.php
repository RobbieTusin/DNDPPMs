<?php
  ob_start();
  include("db.php");
  
		
	$facts=mysql_real_escape_string($_POST['facts']);
    $answer=mysql_real_escape_string($_POST['answer']);
	
	$update=mysql_query("INSERT INTO facts(facts,answer)VALUES
									  ('$facts','$answer')");						  
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
	  header('Location:facts.html');
  }
 ob_end_flush();
?>