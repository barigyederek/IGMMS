<div class="card text-white bg-info">
                    <div class="card-body" id="rangerOneSightingCard">
                        <h1 class="card-title">Sightings</h1>
                        <hr>
                        <div class="col-md-4">
                            <h3>Time</h3>
                            <hr>
                            
                                <li class="card-text "><?php echo $row['animal'];   ?></li>
                            
                                 
                        </div>
                        <div class="col-md-4">
                            <h3>Animal</h3>
                            <hr>
                            
                            <li class="card-text "><?php echo $row['location'];  ?></li>                            
                                
                            

                        </div>
                        <div class="col-md-4">
                            <h3>Type</h3>
                            <hr>
                            
                            <li class="card-text "><?php echo $row ['ranger'];   ?></li>                            
                                

                        </div>

                    </div>
                </div>