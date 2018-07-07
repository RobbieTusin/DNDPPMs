<?php
  ob_start();
  include("db.php");
  if(isset($_GET['particulars_id'])!="")
  {
  $delete=$_GET['particulars_id'];
  $delete=mysql_query("DELETE FROM particulars WHERE particulars_id='$delete'");
  if($delete)
  {
	  header('Location:particularslistview.html');
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
  $delete=mysql_query("DELETE FROM particulars WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:particularslistview.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>