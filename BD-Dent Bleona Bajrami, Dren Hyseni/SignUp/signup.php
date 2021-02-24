<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../Footer/footer.css">
    <link rel="stylesheet" href="signup.css?a">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD-Dent | Sign Up</title>
</head>

<body>

    <div class="header">
        <a href="../Home/home.php"> <img id="logo" src="../photos/LOGO3.png" alt=""></a>
        <ul>
            <li><a class="visibility" href="../Home/home.php">Home</a></li>
            <li><a class="visibility" href="../Services/services.php">Services</a></li>
            <li><a class="visibility" href="../contact/contactUs.php">Contact</a></li>
            <li><a class="visibility" href="../Login/login.php">Login</a></li>
            <a class="visibility" href="../Services book/servicesbook.php"> <button class="booknowbutoni">BOOK NOW</button></a>
        </ul>
    </div>
    <div class="signupdiv">
        <div class="signupcontent">
            <h1>Create A Profile</h1>
            <form action="../UsersMapper/signupverify.php" method="POST" class="signup_form" name="form">

                <input type="text" name="signup-name" id="Name" placeholder="Full Name" autocomplete="off">

                <div id="fullname_error">Please fill up your Full Name</div>

                <input type="email" name="signup-email" placeholder="Email" name="" id="Email" autocomplete="off">

                <div id="email_error">Please fill up your Email</div>
                <input autocomplete="off" type="tel" placeholder="Phone Numer" name="singup-phonenumber" id="phonenumber">

                <div id="phone_error">Please fill up your Phone Number</div>
                <input autocomplete="off" type="password" placeholder="Password" name="signup-password" id="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

                <div id="pass_error">Please fill up your Password</div>
                <button name="signup-button" class="signupbutton" type="submit">CONTINUE</button>
            </form>
            <p class="signup">Your password must be at least 8 characters and contain at least one number, uppercase letter,lowercase letter and one special character </p>
        </div>
    </div>

    <?php
    include '../Footer/footer.php'
    ?>
    <script src="signup.js?a"></script>
</body>

</html>