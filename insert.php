<?php
include("auth.php"); 
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$nama =$_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$usia = $_REQUEST['usia'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`nama`,`alamat`,`usia`,`submittedby`) values ('$trn_date','$nama','$alamat','$usia','$submittedby')";
mysql_query($con,$ins_query) or die(mysql_error($con));
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="nama" placeholder="Masukan Nama" required /></p>
<p><input type="text" name="alamat" placeholder="Masukan Alamat" required /></p>
<p><input type="text" name="age" placeholder="Masukan Usia" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</body>
</html>