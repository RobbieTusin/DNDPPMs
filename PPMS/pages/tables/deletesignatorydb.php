<?php
  ob_start();
  include("db.php");
  if(isset($_GET['signatoryid'])!="")
  {
  $delete=$_GET['signatoryid'];
  $delete=mysql_query("DELETE FROM signatories WHERE signatoryid='$delete'");
  if($delete)
  {
	  header('Location:signatory.html');
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
  $delete=mysql_query("DELETE FROM signatories WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:signatory.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>