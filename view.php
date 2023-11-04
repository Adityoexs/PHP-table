<?php
include("auth.php");
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> |</p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>No</strong></th><th><strong>Nama</strong></th><th><strong>Alamat</strong></th><th><strong>Usia</strong></th><th></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysql_query($con,$sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["nama"]; ?></td><td align="center"><?php echo $row["alamat"]; ?></td><td align="center"><?php echo $row["usia"]; ?></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>