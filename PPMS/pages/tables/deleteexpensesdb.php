<?php
  ob_start();
  include("db.php");
  if(isset($_GET['expense_id'])!="")
  {
  $delete=$_GET['expense_id'];
  $delete=mysql_query("DELETE FROM expenses WHERE expense_id='$delete'");
  if($delete)
  {
	  header('Location:expensesform.php');
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>

<?php
  ob_start();
  include("db.php");
  if(isset($_GET['ID'])!="")
  {
  $delete=$_GET['ID'];
  $delete=mysql_query("DELETE FROM expenses WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:expensesform.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>