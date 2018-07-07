<?php
  ob_start();
  include("db.php");
  if(isset($_GET['projectid'])!="")
  {
  $delete=$_GET['projectid'];
  $delete=mysql_query("DELETE FROM projectname WHERE projectid='$delete'");
  if($delete)
  {
	  header('Location:projectname.html');
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
  $delete=mysql_query("DELETE FROM projectname WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:projectname.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>