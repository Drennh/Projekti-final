<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="login.css?a">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD-Dent | Log In</title>
</head>

<body>
    <div class="header">
        <a href="../Home/home.php"> <img class="responsivelogo" src="../photos/LOGO2.png" alt=""></a>
        <img id="logo" src="../photos/LOGO3.png" alt="">
        <ul class="nav-Links">
            <li><a class="NavLinks" href="../Home/home.php">Home</a></li>
            <li><a class="NavLinks" href="../Services/services.php">Services</a></li>
            <li><a class="NavLinks" href="../contact/contactUs.php">Contact</a></li>
            <li><a class="NavLinks" href="#" class="loginnav">Login</a></li>
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
            <form action="../UsersMapper/loginverify.php" method="POST" class="login_form" name="form">

                <input id="email" name="login-email" placeholder="Email" autocomplete="off">


                <div id="email_error">Please fill up your Email</div>

                <input id="password" type="password" placeholder="Password" name="login-password" autocomplete="off">


                <div id="pass_error">Please fill up your Password</div>

                <p class="passwordforgotten">Forgot Password?</p>

                <button name="login-button" id="buttoni" type="submit">LOG IN</button>

            </form>

            <p class="signup">Don't have profile? <a href="../SignUp/signup.php">Sign Up</a></p>
        </div>
    </div>
    <?php
    include '../Footer/footer.php'
    ?>
    <script src="login.js?d"></script>


</body>

</html>