<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="boot.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel = "icon" href = 
"https://drive.google.com/file/d/1JT95RI91Sy0wCbE9sPCVMJVlMDLKDZJi/view" 
        type = "image/x-icon">
    
    <title>SAKHI</title>
</head>
<body>
    
    <style>
        .navbar-brand{
            font-size:20px;
        }
        .navbar-nav{
            margin-left:auto;
            font-size:17px;
        }
        .nav-item{
            padding:5px;
        }
    </style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fde3e9;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sakhi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
           <?php 
            if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
                echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Welcome '. $_SESSION["name"].'</a>
        </li>';
            }
            else{
                echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Welcome</a>
        </li>';
                }
                ?>
            
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="job.php">Apply Job</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        AOS.init();
    </script>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slides/slide.jpg" style="height: 75vh; object-fit:cover; object-position:center;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>24X7 Ambulance Service</h5>
        <p>We are here with our 24x7 service with oxygen support</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slides/slide5.jpg" style="height: 75vh; object-fit:cover; object-position:center;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Easy to Book</h5>
        <p>Easy user friendly UI</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slides/speed.jpg" style="height: 75vh; object-fit:cover; object-position:center;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fast Delivery</h5>
        <p>fastest booking and drop</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div data-aos="fade-up" class="ad">
        <p>A GLOBAL COMMUNITY OF MOST<br>RELIABLE<br>TRANSPORT SERVICE<br><br></p>
        <ul data-aos="fade-up"> 
            <li>Day By Day In Our Society,Women Are Being Tortured By Their Family Or Society.</li>

            <li>Another Problem In Our Society Is "Transport".<br>There is a Huge Of Problem Of Getting "Ambulance" In Rural Area.</li>
                
            <li>So We'll Give The Oppurtunites To Those Women,So That They Will Be Independent Themselves.</li>
            
            <li>In Our Cab And Ambulances Engines Will Be Unlock By Female Driver's Voice,so that All Cars Will Be Driven By Female Driver.</li>
            
            <li>We'll Continue Monitor The Driver With The Help Of Cc Tv And Gps For The Security Of The Drivers and pasengers.</li>
            
            <button class="document">View Our Documentation</button>
        </ul>
    </div>

    <?php
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    echo'
    <div data-aos="fade-up"  class="main-tariff">
        <h1>our tarrif</h1>
        <div class="inner-tarrif">
            <div class="tarrif-container">
                <div data-aos="fade-up"  class="inner-box">
                    <h2>Ambulance</h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>Oxygen Cylinder avalaible</li>
                        <li>AC avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price Rs 5/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="ambulance.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>
            <script>
        AOS.init();
    </script>


            <div class="tarrif-container">
                <div data-aos="fade-up"  class="inner-box">
                    <h2>Non Ac</h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>spot payment avalaible</li>
                        <li>Online Payment avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price: Rs 15/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="nonac.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>

            <div class="tarrif-container">
                <div data-aos="fade-up" class="inner-box">
                    <h2>Ac </h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>Low Cost</li>
                        <li>Online Payment avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price: 20/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="ac.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>
        </div>

    </div>';
    }
    else{
        echo'<div data-aos="fade-up"  class="main-tariff">
        <h1>our tarrif</h1>
        <div class="inner-tarrif">
            <div class="tarrif-container">
                <div data-aos="fade-up"  class="inner-box">
                    <h2>Ambulance</h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>Oxygen Cylinder avalaible</li>
                        <li>AC avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price Rs 5/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="ambulance.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>


            <div class="tarrif-container">
                <div data-aos="fade-up"  class="inner-box">
                    <h2>Non Ac</h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>spot payment avalaible</li>
                        <li>Online Payment avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price: Rs 15/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="nonac.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>

            <div class="tarrif-container">
                <div data-aos="fade-up" class="inner-box">
                    <h2>Ac </h2><br>
                    <ul>
                        <li>24*7 services</li>
                        <li>Fast booking</li>
                        <li>Low Cost</li>
                        <li>Online Payment avalaible</li>
                        <li>No extra charges</li>
                        
                    </ul>
                    <h3>price: 20/- per km</h3><br>
                    <button class="bttn">
                      <span><a href="ac.php">Book Now</a></span>
                      <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                      </svg>
                    </button>
                    <br>
                </div>
            </div>
        </div>

    </div>';
    }
    ?>

<divc class="fast-booking">
        <h1  data-aos="fade-up" class="fast-heading">we do best</h1>
        <h2 data-aos="fade-up" >than you wish</h2>
        <div  data-aos="fade-up" class="inner-fast">
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-star"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Women Saftey</h1>
                    <p>
                Women's safety involves strategies, practices and policies which aim to reduce gender-based violence,including women's fear of crime & safe spaces.                    </p>
                </div>
            </div>
            <div  data-aos="fade-up" class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div data-aos="fade-up"  class="inner-fast-text">
                    <h1>comfortable journey</h1>
                    <p>
                    Our 1st priority is customer comfort.we will 
                    provide best journey 
                    in road which will give comfort all customer
                    </p>
                </div>
            </div>
            <div data-aos="fade-up"  class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div data-aos="fade-up"  class="inner-fast-text">
                    <h1>fast booking</h1>
                    <p>
                    We are providing fast-booking facilities in cab class.
                     This booking 
                    system designed as simple & easy for all type of users
                    </p>
                </div>
            </div>
            <div  data-aos="fade-up" class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div data-aos="fade-up" class="inner-fast-text">
                    <h1>24*7 service</h1>
                    <p>
                    customers can get our service and find cabs & ambulance
                     as soon as they book.
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div data-aos="fade-up" class="smiles">
        <h>Sakhi...<br>The Reason of Million of Smiles...<br><br></h>
        <p data-aos="fade-up" >We are here to produce  million of smile in all face.
            <span>our main aim is to give empowerment to women behind this
             also women safety.</span>
            Our moto is "apki sakhi always apki sath"</p>
          <button class="smile">About Us</button>
      </div>

      <div class="devoloper" id="dev">
        <h1>Our Devolopers<br><br></h1>
        <img src="anik.png" id="image"></img>
        <p id="mypara">ANIK DUTTA</p>
        <p1 id="about">FULL STACK DEVOLPER</p1>
    </div>
    <div class="left"><img src="left.svg" onclick="changeprevImage()"> </img></div>
    <div class="right"><img src="right.svg" onclick="changenextImage()"> </img></div>

    <script src="image.js"></script>

    <?php
         require "footer.php";
        ?>


</body>
</html>