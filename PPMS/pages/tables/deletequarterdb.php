<?php
  ob_start();
  include("db.php");
  if(isset($_GET['quarterno'])!="")
  {
  $delete=$_GET['quarterno'];
  $delete=mysql_query("DELETE FROM quarter WHERE quarterno='$delete'");
  if($delete)
  {
	  header('Location:quarter.html');
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
  $delete=mysql_query("DELETE FROM quarter WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:quarter.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>