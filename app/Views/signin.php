<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <title>Codeigniter Login with Email/Password Example</title>
    <style>
    body{
   
    background-image:url(https://static.vecteezy.com/system/resources/previews/001/984/861/original/abstract-blue-geometric-circles-overlapping-background-with-light-blue-free-vector.jpg);
    }
    h1{
    text-align:center;
    color:red;
    font-family: 'shrikhand', cursive;
    }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                <h1>Login in</h1>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/index.php/signin/" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-warning">Signin</button>
                    </div>     
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>
