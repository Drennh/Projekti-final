<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="services.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" 
    integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <title>BD-Dent | Services</title>
</head>
<body>

    <!--HEADER FILLIMI-->
    <div class="header">
        <img id="logo" src="../photos/LOGO2.png" alt="">
        <ul class="nav-Links">
            <li><a class="NavLinks" href="../Home/home.php">Home</a></li>
            <li><a class="NavLinks" class="services" href="#">Services</a></li>
            <li><a class="NavLinks" href="../contact/contactUs.php">Contact</a></li>
            <?php

if(!isset($_SESSION['role'])){

  ?> <li><a class="NavLinks" href="../Login/login.php">Login</a></li> <?php
}
else if(isset($_SESSION['role'])){
  
 ?> <li><a class="NavLinks" href="../logOut/logOut.php">Log Out</a></li> <?php
         
}
?>
           <a href="../Services book/servicesbook.php"> <button class="booknowbutoni">BOOK NOW</button></a>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        
    </div>
     <!--HEADER MBARIMI-->


      <!--FILLIMI I KODIT PER DIV KATRORAT FOTOT DHE TEKSTET-->
    <header>

        <!--Kodi per responsive-->
        <div class="responsivetxt">
            <h1 class="servicestxt1">SERVICES</h1>
            <p class="creative1">We’re passionate about helping you <br> experience a beautiful and healthy smile.</p>
        </div>
            <div class="boxes2">
                <div class="katrori1">
                    <img id="icons" src="../icons/check.png" alt="">
                    <h2>Whitening</h2>
                    <p>Our special dentist would make you smile brighter than the sun</p>

                </div>
                <div class="katrori1">
                   <img id="icons" src="../icons/dentist.png" alt="">
                   <h2>Veneers</h2>
                    <p>If you want to improve your smile , dental veneers are a simple option</p>
                </div>
                <div class="katrori1">
                    <img id="icons" src="../icons/root.png" alt="">
                    <h2>Cosmetic</h2>
                    <p>Your smile is one of the first things people notice about you</p>
                </div>
                <div class="katrori1">
                    <img id="icons" src="../icons/tools.png" alt="">
                    <h2>Breezy Braces</h2>
                    <p>It's never too late to get the smile you want</p>
                </div>
            </div>
         <!--Kodi per responsive Mbarimi-->


    <div class="boxes">
         <!--FILLIMI I KODIT PER DIV TEKSTIN NE TE MAJTE-->
        <div class="left">
            <h1 class="servicestxt">SERVICES</h1>
            <p class="creative">We’re passionate about helping you <br> experience a beautiful and healthy smile.</p>
        </div>
         <!--MBARIMI I KODIT PER DIV TEKSTIN NE TE MAJTE-->

          <!--FILLIMI I KODIT PER DIV KATRORET E TEJDUKSHEM ME FOTO DHE TEKST BRENDA-->
        <div class="div2"id="col">
           <img id="icons" src="../icons/check.png" alt=""> <br>
            <h3 id="txt">Whitening</h3>
            <p id="txt" class="ptext" >Our special dentist would make you smile brighter than the sun, two shades or more</p>
        </div>
        <div class="box3"id="col">
            <img id="icons" src="../icons/dentist.png" alt="">  <br>
            <h3 id="txt">Veneers</h3>
            <p id="txt" class="ptext" >If you want to improve your smile , dental veneers are a simple option</p>
        </div>
        <div class="div1"id="col">
            <img id="icons" src="../icons/root.png" alt=""><br>
            <h3 id="txt">Cosmetic</h3>
            <p id="txt" class="ptext" >Your smile is one of the first things people notice about you, let's make it shine.</p>
     </div>
        <div class="box1" id="col">
            <img id="icons" src="../icons/tools.png" alt=""><br>
            <h3 id="txt">Check Up</h3>
            <p id="txt" class="ptext" > We offer treatment solutions for every member of the family, give tour self and your loved ones a chech up</p>
        </div>
        <div class="box2"id="col">
            <img id="icons" src="../icons/tooth.png" alt="">
            <h3 id="txt">Implants</h3>
            <p id="txt" class="ptext" >Perhaps decay moved too deep into the roots, or maybe you had a run in with a rogue softball!</p>
        </div>
      
       <div class="div"id="col">
           <img id="icons" src="../icons/braces.png" alt="">
        <h3 id="txt">Breezy Braces</h3>
            <p id="txt" class="ptext" >It's never too late to get the smile you want, especially now that Breezy Braces are here</p>
       </div>
     
     <!--MBARIMI I KODIT PER DIV KATRORET E TEJDUKSHEM ME FOTO DHE TEKST BRENDA-->
      </div>
    </header>
     <!--MBARIMI I KODIT PER DIV KATRORAT FOTOT DHE TEKSTET-->
<script src="services.js"></script>
<script src="../Burger js/burger.js"></script>
</body>
</html>