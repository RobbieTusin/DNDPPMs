<?php
  ob_start();
  include("db.php");

	$expense_code=mysql_real_escape_string($_POST['expense_code']);	
    $expenseclass=mysql_real_escape_string($_POST['expenseclass']);

	
	$update=mysql_query("INSERT INTO expenses(expense_code,expenseclass)VALUES
									  ('$expense_code','$expenseclass')");						  
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
	  header('Location:expensesform.php');
  }
 ob_end_flush();
?>
