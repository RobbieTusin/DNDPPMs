<?php
  ob_start();
  include("db.php");
  if(isset($_GET['facts_id'])!="")
  {
  $delete=$_GET['facts_id'];
  $delete=mysql_query("DELETE FROM facts WHERE facts_id='$delete'");
  if($delete)
  {
	  header('Location:facts.html');
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
  $delete=mysql_query("DELETE FROM facts WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:facts.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>