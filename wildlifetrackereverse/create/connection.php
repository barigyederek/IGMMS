<?php  

$servername = "localhost";
$username = "root";
$password = "";
$sightings="sightings";
// formDataVariables
     $location=$_POST["location"];
     $ranger=$_POST["ranger"];
     $animal=$_POST["animal"];

// to do "add current timestamp with every database update"

// Create connection
$mysqli = new mysqli($servername, $username, $password, $sightings);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
} else {
  $stmt = $mysqli-> prepare(" insert into rangers (location, ranger, animal ) values (?,?,?)");
  $stmt->bind_param("sss", $location, $ranger,$animal);
  $stmt->execute();
  echo "data inserted successfully.........";
  $stmt->close();
} 

?>   