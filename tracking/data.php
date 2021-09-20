<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'sightings');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


// Create connection
$mysqli = new mysqli(DB_HOST, DB_NAME, DB_CHARSET,DB_PASSWORD,DB_USER);

// check db connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  } else {
    $stmt = $mysqli-> prepare(" insert into gps_track (receiverName, Latitude, Longitude ) values (?,?,?)");
    // $stmt->bind_param("sss", $location, $ranger,$animal);
    $stmt->execute();
    echo "data inserted successfully.........";
    $stmt->close();
  } 
  

?>