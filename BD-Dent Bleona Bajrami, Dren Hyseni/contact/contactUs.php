<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Footer/footer.css" />
    <link rel="stylesheet" href="contactUs.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BD-Dent | Contact Us</title>
  </head>
  <body>
    <div class="header">
      <a href="../Home/home.php"><img id="logo" src="../photos/LOGO3.png" alt=""/></a>
      <a href="../Home/home.php"><img class="responsivelogo" src="../photos/LOGO2.png" alt=""/></a>
      <ul class="nav-Links">
        <li>
          <a class="NavLinks" class="visibility" href="../Home/home.php">Home</a>
        </li>
        <li>
          <a class="NavLinks"class="visibility"href="../Services/services.php">Services</a>
        </li>
        <li><a class="NavLinks" class="visibility" href="">Contact</a></li>
        <?php

if(!isset($_SESSION['role'])){

  ?> <li><a class="NavLinks" href="../Login/login.php">Login</a></li> <?php
}
else if(isset($_SESSION['role'])){
  
 ?> <li><a class="NavLinks" href="../logOut/logOut.php">Log Out</a></li> <?php
         
}
?>
        <a class="visibility" href="../Services book/servicesbook.php">
          <button class="booknowbutoni">BOOK NOW</button></a
        >
      </ul>

      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>

    <div class="contactdiv">
      <div class="contactcontent">
        <h1>Contact Us</h1>

        <form action="../MessagesMapper/contactUsVerify.php" method="POST" class="contactUs_form">
          <input  type="text"   id="Name" name="contact-name"  placeholder="Your Name" autocomplete="off" />

          <div id="fullname_error">Please fill up your Full Name</div>

          <input name="contact-email" placeholder="Your Email" id="Email"autocomplete="off"/>

          <div id="email_error">Please fill up your Email</div>

      
          <textarea name="message" id="message" rows="5" maxlength="300" placeholder="Your Message Here"></textarea>
          <div id="message_error">
            Your message must contain at least 10 letters
          </div>

          <button class="contactusbutton" name="contact-button" type="submit">CONTINUE</button>
        </form>
      </div>

    </div>

    <?php
        include '../Footer/footer.php'
    ?>
    <script src="contactUs.js"></script>
    <script src="../Burger js/burger.js"></script>
  </body>
</html>
