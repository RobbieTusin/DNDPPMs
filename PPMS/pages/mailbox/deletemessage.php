<?php
  ob_start();
  include("db.php");
  if(isset($_GET['message_id'])!="")
  {
  $delete=$_GET['message_id'];
  $delete=mysql_query("DELETE FROM message_us WHERE message_id='$delete'");
  if($delete)
  {
	  header('Location:mailbox.html');
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
  $delete=mysql_query("DELETE FROM message_us WHERE ID='$delete'");
  if($delete)
  {
	  header("Location:mailbox.html");
  }
  else
  {
	  echo mysql_error();
  }
  }
  ob_end_flush();
?>