
<?php
include 'retrive.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card text-white bg-info">
                    <div class="card-body" id="rangerOneSightingCard">
                        <h1 class="card-title">Sightings</h1>
                        <hr>
                        <div class="col-md-4">
                            <h3>Time</h3>
                            <hr>
                            
                                <li class="card-text "><?php global $row; echo  $row['animal'];   ?></li>
                            
                                 
                        </div>
                        <div class="col-md-4">
                            <h3>Animal</h3>
                            <hr>
                            
                            <li class="card-text "><?php global $row; echo $row['location'];  ?></li>                            
                                
                            

                        </div>
                        <div class="col-md-4">
                            <h3>Type</h3>
                            <hr>
                            
                            <li class="card-text "><?php global $row; echo $row ['ranger'];   ?></li>                            
                                

                        </div>

                    </div>
 </div>
</body>
</html>
?>