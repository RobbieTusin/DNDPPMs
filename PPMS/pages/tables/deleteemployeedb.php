<?php
  ob_start();
  include("db.php");
  if(isset($_GET['employee_id'])!="")
  {
  $delete=$_GET['employee_id'];
  $delete=mysql_query("DELETE FROM bacmember WHERE employee_id='$delete'");
  if($delete)
  {
	  header('Location:BacMembertable.html');
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
  $delete=mysql_query("DELETE FROM bacmember WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:BacMembertable.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>