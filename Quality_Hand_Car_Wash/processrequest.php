<?php
print_r($_POST['status']);
$status = $_POST['status'];
$mysql_link=mysql_connect("localhost","root","") 
	or die( "Unable to connect to the server");
    mysql_select_db("qualitycarwash");
foreach($status as $key => $value) {
	//create and issue the query
	$query = "update booking set status ='confirmed' where ContactEmail ='$value' and status ='pending' ";  
	$result = mysql_query($query) or die( "Database Error");
}
?>