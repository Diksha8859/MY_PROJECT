<!DOCTYPE html>
<html>
    <head>
        <title>Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <style>
body{
  background-image: url(https://www.teahub.io/photos/full/323-3237626_beautiful-places-nature-green-mountain-images-hd-wallpapers.jpg);
  text-align:center;
 
}

h4{
  font-family: 'shrikhand', cursive;
 color:white;

}
.form-body{
    background-color: white;
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
                      
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>/index.php/booking/"><span class="glyphicon glyphicon-user"></span> Booking</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </nav>
              <br><br><br>
              <div class="row">
                <div class="col-sm-4  bg-default text-white p-3 offset-1 ">
                    <br>
                    <p>Popular Destinations</p>
                    <h4>Make Your Reservation</h4>
                    <p>Life Is Short And World Is Wide</p>
                    <button type="button" class="btn btn-outline-info btn-large"><a href="<?php echo base_url(); ?>/index.php/explore/">Get Started</a></button>
                </div>
                   
               <div class="col-sm-4 bg-white text-dark p-3 offset-1">
                
                    <div class="form-body">
                      <div class="row">
                          <div class="form-holder">
                              <div class="form-content">
                                  <div class="form-items">
                                      <h3>Booking Form</h3>
                                    
                                         <div class="col-md-10 col-md-pull-7">
                                            <div class="booking-form">
                                            <form>
                                            <div class="form-group">
                                            <span class="form-label">Your Destination</span>
                                            <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-10">
                                            <div class="form-group">
                                            <span class="form-label">Check In</span>
                                            <input class="form-control" type="date" required>
                                            </div>
                                            </div>
                                            <div class="col-sm-10">
                                            <div class="form-group">
                                            <span class="form-label">Check out</span>
                                            <input class="form-control" type="date" required>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-4">
                                            <div class="form-group">
                                            <span class="form-label">Rooms</span>
                                            <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            </div>
                                            </div>
                                            <div class="col-sm-4">
                                            <div class="form-group">
                                            <span class="form-label">Adults</span>
                                            <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            </div>
                                            </div>
                                            <div class="col-sm-4">
                                            <div class="form-group">
                                            <span class="form-label">Children</span>
                                            <select class="form-control">
                                            <option>0</option>
                                            <option>1</option>
                                            <option>2</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            </div>
                                            </div>
                                            </div>
                                                
                                            
                                            </div>
                                            </div>
                                   <div class="form-button mt-3">
                                              <button id="submit" type="submit" class="btn btn-primary">Confirm</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
               </div>
               </div>

              
              </body>
              </html>
