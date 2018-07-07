<?php
  ob_start();
  include("db.php");
  if(isset($_GET['supplier_id'])!="")
  {
  $delete=$_GET['supplier_id'];
  $delete=mysql_query("DELETE FROM supplier WHERE supplier_id='$delete'");
  if($delete)
  {
	  header('Location:suppliertable.html');
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
  $delete=mysql_query("DELETE FROM supplier WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:suppliertable.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>