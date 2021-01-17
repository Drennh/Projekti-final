<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD-Dent | Log In</title>
</head>
<body>
    <div class="header">
        <img class="responsivelogo" src="../photos/LOGO2.png" alt="">
        <img id="logo" src="../photos/LOGO3.png" alt="">
        <ul class="nav-Links">
            <li><a class="NavLinks" href="../Home/home.php">Home</a></li>
            <li><a class="NavLinks" href="../Services/services.php">Services</a></li>
            <li><a class="NavLinks" href="../contact/contactUs.php">Contact</a></li>
            <li ><a class="NavLinks" href="#"class="loginnav">Login</a></li>
            <a href="../Services book/servicesbook.php"> <button class="booknowbutoni">BOOK NOW</button></a>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
    </div>

    <div class="logindiv">
        <div class="logincontent">
            <h1 class="LogIn">LOG IN</h1>
            <form action="https://www.google.com" class="login_form" name="form">
            
            <input id="email" placeholder="Email" autocomplete="off">
        

            <div id="email_error">Please fill up your Email</div>

            <input id="password" type="password" placeholder="Password" name="password" autocomplete="off" >
            

            <div id="pass_error">Please fill up your Password</div>

            <p class="passwordforgotten">Forgot Password?</p>

            <button id="buttoni" type="button">LOG IN</button>

        </form>
            <p class="signup">Don't have profile? <a href="../SignUp/signup.php">Sign Up</a></p>
        </div>
    </div>

    <script src="login.js"></script>


</body>
</html>