<!DOCTYPE html>
<html>
    <head>
        <title>CULTURE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="/js/bootstrap.js"></script>
        <style>
          body{
            background-image: url(https://wallpaperaccess.com/full/156925.jpg);
          }
         .modal-title{
          text-align:center;
          color:cornflowerblue;
          font-family: 'shrikhand', cursive;
         }
        
  
         h1{
          text-align:center;
          color:darkred;
          font-family: 'shrikhand', cursive;
         }
         #dd{
          text-align:center;
         }
        </style>
        <body>
          <nav class="navbar navbar-expand-sm bg-info navbar-danger">
            <div class="container-fluid">
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
          <div class="container mt-3">
            <h1>OUR CULTURE</h1>
            <div class="row">
              <div class="col-sm-3  bg-light text-white p-3">
              <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Kathakali_-Play_with_Kaurava.jpg/640px-Kathakali_-Play_with_Kaurava.jpg" class="responsive"> 
              </div>
              <div class="col-sm-3  bg-light text-white p-3">
              <img class="img-fluid" src="https://www.outlookindia.com/outlooktraveller//public/uploads/filemanager/images/dhoomomal.jpg" class="responsive"> 
             </div>
             <div class="col-sm-3  bg-light text-white p-3">
              <img class="img-fluid" src="https://imgk.timesnownews.com/story/Guru_Purnima_Buddha_2020.jpg?tr=w-400,h-300,fo-auto" class="responsive"> 
            </div>
            <div class="col-sm-3  bg-light text-white p-3">
              <img class="img-fluid" src="https://rukminim1.flixcart.com/image/416/416/k6ci8i80/painting/e/f/6/ret-pnt-550-karigar-original-imafztvyethjqbsz.jpeg?q=70" class="responsive"> 
            </div>
              </div>
            <button type="button" class="btn btn-success btn-large" data-bs-toggle="modal" data-bs-target="#myModal">
              VISIT GALLERY
            </button>
          </div>
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Gallery</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <div id="d1">
                    <div class="container mt-3">
                      <div class="row">
                      <div class="col-sm-10 offset-sm-1 bg-dark text-white p-3">
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/girl-making-rangoli-and-decorating-with-oil-lamps-for-diwali-picture-id454353339?k=20&m=454353339&s=612x612&w=0&h=Fy8vLZkakQFxrbhWGXJLml7Zaeviaq7JmY7Iti3dZHg=" class="responsive"> 
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/happy-outdoor-holi-festival-party-in-spring-picture-id1135282422?k=20&m=1135282422&s=612x612&w=0&h=NC4q5r31eDS3kmb3JwRJVB1ndgowpLRxzsKmqdcIjbs=" class="responsive"> 
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/copper-kalash-and-hindu-puja-or-hindu-pooja-items-picture-id490077454?k=20&m=490077454&s=612x612&w=0&h=gfGX8w8g7MmgS4s3iJfJquaSSx--4Bky9BcWJ3-bnEw=" class="responsive"> 
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/an-unidentified-young-indian-women-in-national-costumes-perform-dance-picture-id834814820?k=20&m=834814820&s=612x612&w=0&h=12xH04fmxlQuQ06o5MzliSrDQ-NbDUDoPUnQ-iur2xA=" class="responsive">
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/giant-bon-fire-lit-for-the-festival-of-lohri-surrounded-by-people-picture-id1205575267?k=20&m=1205575267&s=612x612&w=0&h=y48gM_o4h6KYXTCBre35KP5rUZLtRJkpU6kS9DMkxg8=" class="responsive">
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/traditional-kathakali-dance-on-new-year-carnival-picture-id503219140?k=20&m=503219140&s=612x612&w=0&h=YvJttqswxJ2LczKbFxlArIQI_nX-Kb_oOrUXDY79UVQ=" class="responsive">
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/golden-temple-amritsar-picture-id1254762552?k=20&m=1254762552&s=612x612&w=0&h=4_Ubw6lZs4UQ_sQUhBbEr_A2O2-CdrKNx-G3pgxWp0Y=" class="responsive">
                      <img class="img-fluid" src="https://media.istockphoto.com/photos/kids-making-rangoli-decoration-at-home-picture-id1280100143?k=20&m=1280100143&s=612x612&w=0&h=tCOMGbGhIDfYJCo_fXj3Anz3UrD75g9KJ7uDNEl3p_Q=" class="responsive">
                     
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
          
              </div>
            </div>
          </div>
        
            <div class="container mt-3">
                <h1></h1>
                <div class="row">
                  <div class="col-sm-6 bg-warning text-white p-3">
                    INDIAN FESTIVALS
                  </div>
                  <div class="col-sm-6 bg-warning text-white p-3">
                    INDIAN FOOD
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 bg-info text-white p-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SR. NO.</th>
                          <th>FESTIVALS</th>
                          <th>DETAILS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-success">
                          <td>01</td>
                          <td>Makar Sakranti</td>
                          <td><a href="https://www.outlookindia.com/travel/makar-sankranti-india-s-universal-festival-news-30801">Visit</a></td>
                        </tr>      
                        <tr class="table-primary">
                          <td>02</td>
                          <td>Maha Shivratri</td>
                          <td><a href="https://en.wikipedia.org/wiki/Maha_Shivaratri">Visit</a></td>
                        </tr>
                        <tr class="table-success">
                          <td>03</td>
                          <td>Holi</td>
                          <td><a href="https://en.wikipedia.org/wiki/Holi">Visit</a></td>
                        </tr>
                        <tr class="table-danger">
                          <td>04</td>
                          <td>Baishaki</td>
                          <td><a href="https://en.wikipedia.org/wiki/Vaisakhi">Visit</a></td>
                        </tr>
                        <tr class="table-info">
                          <td>05</td>
                          <td>Rakshabandhan</td>
                          <td><a href="https://en.wikipedia.org/wiki/Raksha_Bandhan">Visit</a></td>
                        </tr>
                        <tr class="table-warning">
                          <td>06</td>
                          <td>Janmashtmi</td>
                          <td><a href="https://en.wikipedia.org/wiki/Krishna_Janmashtami">Visit</a></td>
                        </tr>
                        <tr class="table-secondary">
                          <td>07</td>
                          <td>Independence Day</td>
                          <td><a href="https://en.wikipedia.org/wiki/Independence_Day_(India)">Visit</a></td>
                        </tr>
                        <tr class="table-secondary">
                          <td>08</td>
                          <td>Ganesh Chatirthi</td>
                          <td><a href="https://en.wikipedia.org/wiki/Ganesh_Chaturthi">Visit</a></td>
                        </tr>
                        <tr class="table-light">
                          <td>09</td>
                          <td>Durga Puja</td>
                          <td><a href="https://en.wikipedia.org/wiki/Durga_Puja">Visit</a></td>
                        </tr>
                        <tr class="table-info">
                          <td>10</td>
                          <td>Diwali</td>
                          <td><a href="https://en.wikipedia.org/wiki/Diwali">Visit</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-sm-6 bg-info text-white p-3">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SR. NO.</th>
                          <th>STATE</th>
                          <th>FAMOUS FOOD</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-success">
                          <td>01</td>
                          <td>Kerala</td>
                          <td>Appam</td>
                        </tr>      
                        <tr class="table-primary">
                          <td>02</td>
                          <td>Tamil Nadu</td>
                          <td> Pongal</td>
                        </tr>
                        <tr class="table-success">
                          <td>03</td>
                          <td>Himachal Pradesh</td>
                          <td>Dham</td>
                        </tr>
                        <tr class="table-danger">
                          <td>04</td>
                          <td>Bihar</td>
                          <td>Litti Chowkha</td>
                        </tr>
                        <tr class="table-info">
                          <td>05</td>
                          <td>West Bengal</td>
                          <td>osha Mangsho</td>
                        </tr>
                        <tr class="table-warning">
                          <td>06</td>
                          <td>Punjab</td>
                          <td>Makki Di Roti & Sarson Da Saag</td>
                        </tr>
                        <tr class="table-secondary">
                          <td>07</td>
                          <td>Gujrat</td>
                          <td>Dhokla</td>
                        </tr>
                        <tr class="table-secondary">
                          <td>08</td>
                          <td>Kashmir</td>
                          <td>Rogan Josh</td>
                        </tr>
                        <tr class="table-light">
                          <td>09</td>
                          <td>Sikkim</td>
                          <td>Momo</td>
                        </tr>
                        <tr class="table-info">
                          <td>10</td>
                          <td>Rajasthan</td>
                          <td>Dal Baati Churma</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="container mt-3">
                  <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="file:///C:/Users/hp/Desktop/myproject.html">Page1</a></li>
                    <li class="page-item"><a class="page-link" href="file:///C:/Users/hp/Desktop/Historical%20places.html">Page2</a></li>
                    <li class="page-item"><a class="page-link" href="file:///C:/Users/hp/Desktop/CULTURE.html">Page3</a></li>
                  </ul>
                </div>
              </div>
              
        </body>
        </html>
