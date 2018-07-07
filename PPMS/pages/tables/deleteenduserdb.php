<?php
  ob_start();
  include("db.php");
  if(isset($_GET['enduserid'])!="")
  {
  $delete=$_GET['enduserid'];
  $delete=mysql_query("DELETE FROM enduser WHERE enduserid='$delete'");
  if($delete)
  {
	  header('Location: endusertables.html');
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
  $delete=mysql_query("DELETE FROM enduser WHERE ID='$delete'");
  if($delete)
  {
	  header("Location: enduserlistview.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>