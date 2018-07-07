<?php
  ob_start();
  include("db.php");
  if(isset($_GET['td_id'])!="")
  {
  $delete=$_GET['td_id'];
  $delete=mysql_query("DELETE FROM todolist WHERE td_id='$delete'");
  if($delete)
  {
	  header('Location:../PPMS/index.html');
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
  if(isset($_GET['td_id'])!="")
  {
  $delete=$_GET['td_id'];
  $delete=mysql_query("DELETE FROM todolist WHERE td_id='$delete'");
  if($delete)
  {
	  header("Location:../PPMS/index.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>