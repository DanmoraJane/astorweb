<?php include ('login.php'); ?>
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


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="index.php">Danmora</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
      <li class="nav-item active"><a class="nav-link" href="contacts.php">Contacts</a></li>
    </ul>
<div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
<div class="hello">
        <?php if (isset($_SESSION['success'])): ?>
      Hello, <strong> <?php echo $_SESSION['email']; ?> </strong>
    <a href="index.php?logout='1'" style="color:red;">Logout</a>
        <?php endif ?>
</div>
        <form method="post" action="index.php">
        <?php include('errors.php'); ?>
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login"><span class="fa fa-sign-in"><p class="sign"> Sign in </p></a></button>
        </form>

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
        <form action="index.php" method="POST">
        <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn">Sign in</button>
    </div>
  </form>
      </div>
      </div>
  </div>




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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
