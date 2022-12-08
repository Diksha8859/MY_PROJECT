<!DOCTYPE html>
<html>
    <head>
        <title>Explore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <style>
h2{
    color:darkred;
    text-align:center;
    font-family: 'shrikhand', cursive;
}

a{
  color:darkred;
}
.col-sm-3{
  text-align:center; 
}
         </style>
    </head>
    <body>
      
      <nav class="navbar navbar-expand-sm bg-info navbar-danger">
               
                  <a class="navbar-brand" href="#">
                    <img src="https://c8.alamy.com/comp/2C521FC/travel-agency-tourism-logo-isolated-on-white-background-tourism-travel-logo-design-vector-template-2C521FC.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>/index.php/myproject/">Home</a>
                    </li>
                  
                   <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url(); ?>/index.php/historical_places/">Hystorical Places</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/culture/">Culture</a>
                      </li>
                      <li class="nav-item">
                        <a  class="nav-link"href="<?php echo base_url(); ?>/index.php/booking/"> Booking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/signin/"> Logout</a>
                      </li>
                  
                  </ul>
                </div>
               
              </nav>
              <div>
                <h2>Best Places To Explore</h2>
            </div>
            <div class="row">
              <div class="col-sm-6 offset-sm-3 bg-light text-primary p-3">
                <blockquote class="blockquote">A tourist will come drawn to its beautiful past but we need to put efforts for creating systems to make them stay here.</blockquote>
                </div>
                </div>
            <div class="row">
            <div class="col-sm-3 bg-info text-white p-3">
                <img class="img-fluid" src="https://www.holidify.com/images/bgImages/LADAKH.jpg">
                <a href="<?php echo base_url(); ?>/index.php/booking/">Leh ladakh</a>
                </div>
                <div class="col-sm-3 bg-info text-white p-3">
                    <img class="img-fluid" src="https://www.holidify.com/images/bgImages/ANDAMAN-NICOBAR-ISLANDS.jpg">
                    <a href="<?php echo base_url(); ?>/index.php/booking/">Andaman</a>
                    </div>
                    <div class="col-sm-3 bg-info text-white p-3">
                        <img class="img-fluid" src="https://www.holidify.com/images/bgImages/RISHIKESH.jpg">
                        <a href="<?php echo base_url(); ?>/index.php/booking/">Rishikesh</a>
                        </div>
                        <div class="col-sm-3 bg-info text-white p-3">
                            <img class="img-fluid" src="https://www.holidify.com/images/bgImages/SRINAGAR.jpg">
                            <a href="<?php echo base_url(); ?>/index.php/booking/">Sri Nagar</a>
                            </div>
                            </div>
            </div>
            <div class="row">
                <div class="col-sm-3 bg-info text-white p-3">
                    <img class="img-fluid" src="https://www.holidify.com/images/bgImages/GOKARNA.jpg">
                    <a href="<?php echo base_url(); ?>/index.php/booking/">Goa</a>
                    </div>
                    <div class="col-sm-3 bg-info text-white p-3">
                        <img class="img-fluid" src="https://www.holidify.com/images/bgImages/HARIDWAR.jpg">
                        <a href="<?php echo base_url(); ?>/index.php/booking/">Haridwar</a>
                        </div>
                        <div class="col-sm-3 bg-info text-white p-3">
                            <img class="img-fluid" src="https://www.holidify.com/images/bgImages/MANALI.jpg">
                            <a href="<?php echo base_url(); ?>/index.php/booking/">Manali</a>
                            </div>
                            <div class="col-sm-3 bg-info text-white p-3">
                                <img class="img-fluid" src="https://www.holidify.com/images/bgImages/KODAIKANAL.jpg">
                                <a href="<?php echo base_url(); ?>/index.php/booking/">kodaikanal</a>
                                </div>
                                </div>
                </div>
            </body>
            </html>
