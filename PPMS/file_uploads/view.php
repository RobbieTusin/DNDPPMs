<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
	<table class="form-control" width="100%">
     <thead>
	<th>Id</th>
	<th>Category</th>
	<th> Name</th>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>Delete</th>
	<th>Download</th>
    </thead>
		<tbody>

    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
		
        <td><?php echo $row['category_name'] ?></td> 
        <td><?php echo $row['dlname'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td> 
		
		 
        <?php
	}
	?>
		</tbody>

    </table>
    
</div>
</body>
</html>