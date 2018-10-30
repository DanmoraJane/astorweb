<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Webpage</title>
  <meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="#">Danmora</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active"><a class="nav-link" href="index.php">Home </a></li>
      <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
      <li class="nav-item"><a class="nav-link" href="contacts.php">Contacts</a></li>
    </ul>
<div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
<li><a class="nav-link" href="register.php"><span class="fa fa-user"><p class="sign"> Sign up</p></a></li>
  <li><a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in"><p class="sign"> Sign in</p></a></li>
    </ul>
  </div>
  </div>
</nav>

<div class="modal fade" role="dialog" id="loginModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Login</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Username">
      </div>
      <div class="form-group">
      <input type="text" name="password" class="form-control" placeholder="Password">
    </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">Sign in</button>
    </div>
      </div>
      </div>
  </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="forest.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Header 1</h5>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="forest.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Header 2</h5>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="forest.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Header 3</h5>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>



<div class="container">
  <div class="row justify-content-around">
 <a class="col-sm-3 block-link" href="#">


    <div class="thumbnail">
      <div class="zoom">
      <img class="image" src="html.png" width="100" height="140">
    </div>
      <hr>
      <h3>HTML5</h3>
    </div>
</a>
 <a class="col-sm-3 block-link" href="contacts.php">

  <div class="thumbnail">
    <div class="zoom">
     <img class="image" src="css.png" width="100" height="140">
   </div>
         <hr>
      <h3>CSS</h3>
    </div>
    </a>
 <a class="col-sm-3 block-link" href="#">

    <div class="thumbnail">
      <div class="zoom">
    <img class="image" src="bs.png" width="140" height="140">
  </div>
        <hr>
      <h3>Bootstrap</h3>
    </div>
</a>
  </div>
</div>
<hr>


<div class="container">
<div class="row">
    <div class="col-sm-6">
      <p class="column">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-sm-6">
       <img src="bs.png" width="300" height="300">
    </div>
  </div>
</div>
<hr>

<div class="container">
<div class="row">

    <div class="col-sm-6">
       <img src="bs.png" width="300" height="300">
    </div>
    <div class="col-sm-6">
      <p class="column">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
  </div>
</div>
<hr>

</body>
</html>
