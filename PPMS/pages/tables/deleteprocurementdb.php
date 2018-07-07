<?php
  ob_start();
  include("db.php");
  if(isset($_GET['procurementid'])!="")
  {
  $delete=$_GET['procurementid'];
  $delete=mysql_query("DELETE FROM procurement WHERE procurementid='$delete'");
  if($delete)
  {
	  header('Location:procurementtables.html');
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
  $delete=mysql_query("DELETE FROM procurement WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:procurementtables.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>