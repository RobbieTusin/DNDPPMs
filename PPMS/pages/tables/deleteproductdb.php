<?php
  ob_start();
  include("db.php");
  if(isset($_GET['productid'])!="")
  {
  $delete=$_GET['productid'];
  $delete=mysql_query("DELETE FROM product WHERE productid='$delete'");
  if($delete)
  {
	  header('Location:producttables.html');
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
  $delete=mysql_query("DELETE FROM product WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:producttables.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>