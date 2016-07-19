<?php
	/* ALTERVISTA */
	$username = "tim43hyp";
	$password = "";
	$host = "localhost";
	$database = "my_tim43hyp";
	
	/* XAMPP 
	$username = "root";
	$password = "";
	$host = "localhost";
	$database = "my_hyp43tim";*/

$db = mysql_connect($host, $username, $password) or die("Unable to connect with the DataBase");
mysql_select_db($database, $db) or die("Unable to connect with the DataBase"); 

if (isset($_GET['id'])){
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT Image FROM whoweare WHERE ID='$id'");
	while($row = mysql_fetch_assoc($query)){
		$imageData = $row ["Image"];
	}
	header("content-type: Image/jpg");        
	echo $imageData;
}else {
	echo "There were an error loading the image";
}

?>