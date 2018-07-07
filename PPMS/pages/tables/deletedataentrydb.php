<?php
  ob_start();
  include("db.php");
  if(isset($_GET['mode_id'])!="")
  {
  $delete=$_GET['mode_id'];
  $delete=mysql_query("DELETE FROM moprocurement WHERE mode_id='$delete'");
  if($delete)
  {
	  header('Location:dataentrytables.html');
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
  $delete=mysql_query("DELETE FROM moprocurement WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:dataentrytables.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>