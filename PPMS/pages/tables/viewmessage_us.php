<!DOCTYPE html>
<html>
	<head>
		<!--THIS LINK IS FOR FAVICON-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title> DATABASE | 3R&M Cosmetics&trade; </title>
	</head>
	
<style>
			a:hover 
			{
				color: pink;
			}
		
			#image
			{
				background-image:url(../PHP/Images/blackborder.jpg);
				position: fixed;
				top:0;
				left:0;
				
				min-width:100%;
				min-height:5%;
			}
			#images
			{
				background-image:url(../PHP/Images/white.jpg);
				position: fixed;
				top:40px;
				left:0;
				
				min-width:100%;
				min-height:10%;
			}	
			#FS
			{
				color: white;
				font-family: Tw Cen MT Condensed;
				font-size: 50;
				text-align:30px;
				padding: 4px;
				position: relative;
				top: 1px;
				left: 100px;
				<!-- POSITION, TOP, LEFT FOR MOVING FREE SHIPPING LEFT-->	
				<!--font-weight: bold;-->
			}
			#DO
			{
				color: white;
				font-family: Tw Cen MT Condensed;
				font-size: 20;
				text-align:30px;
				padding: 4px;
				position: relative;
				top: 1px;
				left: 250px;
				vertical-align: text-bottom;
			}	
			
			#logo
			{
					position: relative;
					top:18px;
					left:98px;
			}			
	<!--tables-->
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>

	<script>
		function popup() 
		{
				alert("GOODBYE ADMIN :)");
		}
	</script>
	
	<div id="image">
			<div id="FS">
						<span style=" 
						font-family: Tw Cen MT Condensed; 
						font-size: 20px;
						vertical-align: text-bottom; 
						color:white;
						text-align:30px;
						padding:4px;
						position: relative;
						top: 1.5px;
						left: 500px;
						"> 
						WELCOME ADMIN!
						</span>
			</div>
			</div>

			<div id="images">
			<div id="logo">
				<a href="http://localhost/PHP/Welcome.php">
					<img src="../PHP/logo.png">
				</a>
			</div>
			
									<span style=" 
						font-family: Tw Cen MT Condensed; 
						font-size: 30px;
						vertical-align: text-bottom; 
						color:black;
						text-align:30px;
						padding:4px;
						position: absolute;
						top: 13px;
						left: 580px;
						"> 
					<b>	VIEW DATABASE </b>
						</span>
			
									<span style=" 
						font-family: Tw Cen MT Condensed; 
						font-size: 20px;
						vertical-align: text-bottom; 
						color:black;
						text-align:30px;
						padding:4px;
						position: absolute;
						top: 15px;;
						left: 1200px;
						"> 
						<a>
						</a>
						</span>	
			</div>		
<br><br><br><br><br><br><br>
	
<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM message_us order by message_id desc");
  $i=1;

  echo'
  <table border="1" cellspacing="0" cellpadding="0" width=1331>
  <thead>
	<th> name </th>
	<th> subject </th>
	<th> message </th>
	
  </thead>
  </table>';
  
 
  while($userrow=mysql_fetch_array($select))
  
  {
	$name = $userrow['name'];
	$subject = $userrow['subject'];
	$message = $userrow['message'];
?>

<div class="display1"> 
<table border=1>
  <tr>	
		<td width=300 ><?php echo $name; ?>
		<td width=300 ><?php echo $subject; ?>
		<td width=300 ><?php echo $message; ?>
  </tr>
</table> 
</div>

<?php 
}
?>