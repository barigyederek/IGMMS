<html>
    <head>
    <title> INTEGRATED GAME MONITORING AND MANAGEMENT SYSTEM</title>

     <!-- bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   
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
    <!-- begin main template -->

    <div class="main-content">
        
        <div class="form">
            <form action="connection.php" method="post">



                <h1>Create Sighting</h1>
                <hr>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <!-- <label class="input-group-text" for="location">Location</label> -->
                        </div>
                        <label for="Location" class="label"  > Location</label>
                        <input type="text"   class="text-box" id="location1" name="location">
                       

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <!-- <label class="input-group-text" for="ranger">Ranger</label> -->
                        </div>
                        <label for="Ranger"class="label">Ranger</label>
                        <input type="text" class="text-box" id="location1" name="ranger">

                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <!-- <label class="input-group-text" for="animal">Animal </label> -->
                        </div>
                        <label for="Animal"class="label"> Animal</label>
                        <input type="text" class="text-box" id="location1" name="animal">

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit"  class="btn btn-success btn-lg" name="insert" id="insert" > Create </button>
                </div>
            </form>
        </div>


    </div>

<!--end main template-->
<!--end main template-->




   
</body>

<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>
