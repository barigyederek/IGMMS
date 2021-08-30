<html><head>
    <title> INTEGRATED GAME MONITORING AND MANAGEMENT SYSTEM</title>
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

  
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="/IGMMS/wildlifetrackereverse/public/css/bootstrap.css">
    <link rel="stylesheet" href="/IGMMS/wildlifetrackereverse/public/css/app.css">
    <script src="/IGMMS/wildlifetrackereverse/public/js/jquery.js"></script>
    <script src="/IGMMS/wildlifetrackereverse/public/js/popper.min.js"></script>
    <script src="/IGMMS/wildlifetrackereverse/public/js/bootstrap.min.js"></script>
</head>
<body data-new-gr-c-s-check-loaded="14.1026.0" data-gr-ext-installed="">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/IGMMS/wildlifetrackereverse/view/layout.php">Home</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="viewDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                View
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/IGMMS/wildlifetrackereverse/view/ranger.php">Ranger</a>
                <a class="dropdown-item" href="/IGMMS/wildlifetrackereverse/view/animal.php">Animal</a>
               
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="createDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Create
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               
                <a class="dropdown-item" href="/IGMMS/wildlifetrackereverse/create/sighting.php">Sighting</a>
            </div>
        </li>
    </ul>
</div>
</nav>

    <!--begin main template-->

    <div class="main-content">
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                
                    
                        <div class="entries">
                            <p class="text" id="1">Ruth Wangui Mwangi</p><br>
                            <button class="btn btn-primary btn-md" onclick="rangerOne()">View
                                Sightings</button>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="2">Sylvia Achach</p><br>
                            <a href="/view/ranger/sightings/2"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="3">fatah</p><br>
                            <a href="/view/ranger/sightings/3"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="4">JeromeMberia</p><br>
                            <a href="/view/ranger/sightings/4"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="5">Faith</p><br>
                            <a href="/view/ranger/sightings/5"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="6">Lion</p><br>
                            <a href="/view/ranger/sightings/6"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="7">Maureeen</p><br>
                            <a href="/view/ranger/sightings/7"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="8">mojombo</p><br>
                            <a href="/view/ranger/sightings/8"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="9">Michael Mbaya Gikunda</p><br>
                            <a href="/view/ranger/sightings/9"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="10">benitha</p><br>
                            <a href="/view/ranger/sightings/10"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="11">Anna</p><br>
                            <a href="/view/ranger/sightings/11"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="12">mimi</p><br>
                            <a href="/view/ranger/sightings/12"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="13">ping-pong</p><br>
                            <a href="/view/ranger/sightings/13"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="14">Gladys</p><br>
                            <a href="/view/ranger/sightings/14"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="15">mugisha brian</p><br>
                            <a href="/view/ranger/sightings/15"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="16">Gladys</p><br>
                            <a href="/view/ranger/sightings/16"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>
<
                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="17">Gladys</p><br>
                            <a href="/view/ranger/sightings/17"><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="18">Ranger</p><br>
                            <a href=""><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    
                        <div class="entries">
                            <p class="text" id="19">Habib</p><br>
                            <a href=""><button class="btn btn-primary btn-md">View
                                Sightings</button></a>

                        </div>
                        <hr><br>
                    

                
            </div>

            <!-- CARDS FOR THE RANGERS -->


    <div class="col-md-8" >               

                <?php

                    foreach ($result as $row ) {
                        include 'resultvalues.php';
                    }


                ?>

            </div>
        </div>
    </div>




 </div>

 
            


    <!-- js to display the rangers cards -->


    <script>
        function rangerOne() {
            var x = document.getElementById("rangerOneSightingCard")
            if (x.style.display === "none") {
                x.style.display= "block";
                
            } else{
                x.style.display = "none";
            }
        }

        function rangerOne() {
            var x = document.getElementById("rangerTwoSightingCard")
            if (x.style.display === "none") {
                x.style.display= "block";
                
            } else{
                x.style.display = "none";
            }
        }

        function rangerOne() {
            var x = document.getElementById("rangerThreeSightingCard")
            if (x.style.display === "none") {
                x.style.display= "block";
                
            } else{
                x.style.display = "none";
            }
        }
    </script>

<!--end main template-->

    
    
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>