<?php
$servername = "localhost";
$username = "root";
$password = "password";


$dbhandle = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db("first_db",$dbhandle) or die("Could not select examples");

$sql = "SELECT * FROM list";
$rslt = mysql_query($sql);
while($row = mysql_fetch_array($rslt))
{
	$data[] = $row;
}
print json_encode($data);


?>  