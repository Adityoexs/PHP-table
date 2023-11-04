<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysql_query($con,$query) or die ( mysql_error($con));
header("Location: view.php"); 
exit();
?>