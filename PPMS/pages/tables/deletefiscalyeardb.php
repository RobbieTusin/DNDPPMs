<?php
  ob_start();
  include("db.php");
  if(isset($_GET['fiscalno'])!="")
  {
  $delete=$_GET['fiscalno'];
  $delete=mysql_query("DELETE FROM fiscalyear WHERE fiscalno='$delete'");
  if($delete)
  {
	  header('Location:fiscalyear.html');
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
  $delete=mysql_query("DELETE FROM fiscalyear WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:fiscalyear.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>