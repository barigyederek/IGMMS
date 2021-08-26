<?php 
$server_name = "localhost";//put your server name 
$user_name = "root";//your user name here 
$user_password = "";// the password you use 
$database_name = "sightings";// your database name

// build coonnection with database 
$connection = new mysqli($server_name, $user_name, $user_password, $database_name);
// verify connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$query=mysql_query("SELECT * FROM sightings") or die(mysql_error());

//if we get any results we show them in table data
if(mysql_num_rows($query)>0):


$connection->close();
?>
