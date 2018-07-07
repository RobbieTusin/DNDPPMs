<?php
  ob_start();
  include("db.php");
  if(isset($_GET['unitno'])!="")
  {
  $delete=$_GET['unitno'];
  $delete=mysql_query("DELETE FROM unit WHERE unitno='$delete'");
  if($delete)
  {
	  header('Location:unit.html');
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
  $delete=mysql_query("DELETE FROM unit WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:unit.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>