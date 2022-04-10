<?php
    session_start();
    echo $_SESSION['loggedin'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <!-- CSS only -->
    <link rel="stylesheet" href="boot.css" />
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sakhi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apply Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ambulance</a>
        </li>
        <?php 
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
            echo '
                <li class="nav-item">
                <a class="nav-link" href="signup.php">SignUp</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="home.php">Login</a>
                </li>';
            }
            else{
                echo '<li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>';
            }
            ?>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>