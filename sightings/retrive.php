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

$query = mysqli_query($connection,"SELECT * FROM rangers");

$result = array();
$result = mysqli_num_rows($query);

if ($result > 0) {
    $result = mysqli_fetch_array($query);

} 





mysqli_close($connection);
?>
