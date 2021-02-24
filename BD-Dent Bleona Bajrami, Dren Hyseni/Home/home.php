<?php
session_start();
include_once '../DashboardMapper/addMapper.php';
$fileAdded = new AddMapper();
$fileAddedList = $fileAdded->getAllAdds();
$InspirationalAddedList = $fileAdded->getAllInspirationalInfo();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="home.css?a" />
  <link rel="stylesheet" href="homeResponsive.css" />
  <link rel="stylesheet" href="../Footer/footer.css" />


  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
  <title>BD-Dent | Home Page</title>
</head>

<body>
  <!--HEADER FILLIMI-->
  <header id="headersection">
    <video autoplay muted loop id="myVideo">
      <source src="../photos/girlVid.mp4" type="video/mp4" />

    </video>
    <?php
    if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {


    ?> <a href="../Dashboard/dashboard.php"> <button id="DashboardButton">DASHBOARD</button></a>
    <?php

    }
    ?>


    <div class="navigation">
      <img id="logo" src="../photos/LOGO2.png" alt="" />
      <ul class="nav-Links">
        <li><a class="NavLinks" class="home" href="#">Home</a></li>
        <li>
          <a class="NavLinks" href="../Services/services.php">Services</a>
        </li>
        <li><a class="NavLinks" href="../contact/contactUs.php">Contact</a></li>
        <?php

        if (!isset($_SESSION['role'])) {

        ?> <li><a class="NavLinks" href="../Login/login.php">Login</a></li>
        <?php
        } else if (isset($_SESSION['role'])) {

        ?> <li><a class="NavLinks" href="../logOut/logOut.php">Log Out</a></li>
        <?php

        }
        ?>

      </ul>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>

    <div class="main1">
      <h1 class="lifeisshort">Life is short</h1>
      <h2 class="smilewhile">
        <span class="smiletxt">Smile </span>
        <span class="whileyouhave">while you still have teeth</span>
      </h2>

      <a href="../Services book/servicesbook.php">
        <button class="butoni1">Book now</button>
      </a>
    </div>
  </header>
  <!--HEADER MBARIMI-->

  <!--PJESA E TEKSTEVE NEN HEADER FILLIMI-->
  <div class="inspirationaltext">
    <?php
    foreach ($InspirationalAddedList as $Inspirational) {
    ?>
      <div>
        <h1><?php echo $Inspirational['headertext']; ?></h1>
        <p>
          <?php echo $Inspirational['description']; ?>
        </p>
      </div>
    <?php
    }
    ?>
  </div>

  <!--PJESA E TEKSTEVE NEN HEADER MBARIMI-->

  <!--FILLIMI I DIVIT PER SHIGJETEN SCROLL-->
  <div class="arrow">
    <a href="#ourclinicsection">
      <img id="arrowpic" src="../photos/arrow.png" alt="" /></a>
  </div>
  <!--MBARIMI I DIVIT PER SHIGJETEN SCROLL-->

  <!--FILLIMI I OUR CLINIC FOTOVE DHE SHKRIMIT-->
  <div class="ourclinicyourgoto" id="ourclinicsection">
    <div class="photo1"></div>
    <div class="blank">
      <h1><span>Our</span> clinic Your G<span>o To</span></h1>
      <a href="../Services book/servicesbook.php">
        <button class="butoni2">Book now</button>
      </a>
    </div>
    <div class="photo2"></div>
    <!--MBARIMI I OUR CLINIC FOTOVE DHE SHKRIMIT-->
  </div>
  <!--FILLIMI I DIVIT PER SHIGJETEN2 SCROLL-->
  <div class="arrow2">
    <a href="#ourstaffsection">
      <img id="arrowpic" src="../photos/arrow.png" alt="" /></a>
  </div>
  <!--MBARIMI I DIVIT PER SHIGJETEN2 SCROLL-->

  <!--FILLIMI OUR STAFF FOTOT DHE TEKSTI-->
  <div class="ourstaff" id="ourstaffsection">
    <div class="headline">
      <h1 class="headlinetext">Our Staff</h1>
    </div>

    <?php
    foreach ($fileAddedList as $files) {

      if ($files['addtype'] == 'doctor') { ?>
        <div class="doctor">
          <img class="docpic" src="../photos/<?php echo $files['image']; ?>">
          <h1 class="drname"><?php echo $files['headtext']; ?></h1>
          <p class="docdescription"><?php echo $files['description']; ?></p>
        </div>
    <?php
      }
    } ?>
  </div>
  <!--MBARIMI OUR STAFF FOTOT DHE TEKSTI-->


  <!--FILLIMI I DIVIT PER SHIGJETEN3 SCROLL-->
  <div class="arrow2">
    <a href="#booksection">
      <img id="arrowpic" src="../photos/arrow.png" alt="" /></a>
  </div>
  <!--MBARIMI I DIVIT PER SHIGJETEN3 SCROLL-->

  <!--FILLIMI BOOK NOW FOTOT DHE TEKSIT-->

  <div class="book" id="booksection">
    <?php
    foreach ($fileAddedList as $files) {

      if ($files['addtype'] == 'marketing') { ?>

        <div class="smile">
          <img src="../photos/<?php echo $files['image']; ?>">
          <h1><?php echo $files['headtext']; ?></h1>
          <p><?php echo $files['description']; ?></p>
          <a href="../Services book/servicesbook.php">
            <button class="smilebutton">BOOK</button></a>

        </div>
    <?php
      }
    } ?>
  </div>

  <!--FILLIMI BOOK NOW FOTOT DHE TEKSIT-->

  <!--FILLIMI I DIVIT PER SHIGJETEN4 SCROLL-->
  <div class="arrow3">
    <a href="#slidersection">
      <img id="arrowpic" src="../photos/arrow.png" alt="" /></a>
  </div>
  <!--MBARIMI I DIVIT PER SHIGJETEN4 SCROLL-->

  <img class="leftarrow" src="../photos/LeftArrow1.png" alt="">

  <img class="rightarrow" src="../photos/RightArrow1.png" alt="">
  <div id="slidersection" class="slider">
    <div id="image1" class="slider-content active">

    </div>
    <div id="image2" class="slider-content not-active">

    </div>
    <div id="image3" class="slider-content not-active">

    </div>
  </div>
  <?php
  include '../Footer/footer.php'
  ?>

  <script src="home.js"></script>
  <script src="../Burger js/burger.js"></script>
</body>

</html>