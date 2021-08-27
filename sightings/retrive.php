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

$result = mysqli_num_rows($query);

if ($result > 0) {
    $result = mysqli_fetch_array($query);

} 



// //if we get any results we show them in table data
// if($row>0){
//     // echo $row['animal'];   

//     $result_animal = $row['animal'];
//     $result_location = $row['location'];
//     //$result_location = $row['location'];

//     // echo '<li class="card-text ">' . $row['animal'] . '</li>';

// }


mysqli_close($connection);
?>
