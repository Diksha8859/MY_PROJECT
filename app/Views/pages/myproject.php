<!DOCTYPE html>
<html>
    <head>
        <title>myproject</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <style>
#D1{
  background-image: url(https://globetrender.com/wp-content/uploads/2020/05/Caribbean-beach.jpg);
  text-align:center;
  height:600px;
 
}
background-image{
  size:100%;
}
h1{
  font-family: 'shrikhand', cursive;
 color:olivedrab;

}
#D2{
 
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
                      <a class="nav-link" href="<?php echo base_url(); ?>/index.php/signup/"> Logout</a>
                    </li>
                  </ul>
                </div>
              </nav>

            <div id="D1">
      
                <br><br><br><br><br><br>
                <h1 > Welcome to amazing Journey</h1>
               <p>Explore the diversity of incredible India </p>
                <button type="button" class="btn btn-outline-info btn-large"><a href="<?php echo base_url(); ?>/index.php/explore/">Explore</a></button>
                </div>
            
     
    </body>
</html>
