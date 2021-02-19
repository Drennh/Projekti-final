<?php
    session_start();
  

    if(!isset($_SESSION['role'])){
        header("Location:../Login/login.php");
    }  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bookNow.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" 
    integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <title>BD-Dent |Book Now</title>
</head>
<body>
    <header>
        <a href="../Home/home.php"> <img id="logo" src="../photos/LOGO3.png" alt=""></a> 
      </header>
      
      <main>
          <div class="leftside">
            
          </div>
          <div class="rightside">
            <h1 class="booknow">Book Now</h1>
            <form class="signup_form" method="post" name="form" onsubmit="return validated()" action="../BookMapper/bookNowVerify.php">
           <div class="indiv" id="div1">


            <input class="description" type="text" name="name1" placeholder="Full Name">
            <div id="fullname_error">Please fill up your Full Name</div>
            </div>
            <!--Different Div-->
            <div class="indiv" id="div2">
               <input class="description" type="tel" name="phone" placeholder="Phone Number" >
               <div id="phone_error">Please fill up your Phone Number</div>
                </div>
                <!--Different Div-->
                 <div class="indiv" id="div3">
                    
                    <input class="description" type="email" name="email" placeholder="Email">
                    <div id="email_error">Please fill up your Email</div>
                    </div>
                    <!--Different Div-->
                   <div class="indiv" id="div4">

                    <input class="description" type="date" id="start" name="date" pattern="\d{4}-\d{2}-\d{2}"
                   
                    min="2021-01-01" max="2023-12-31">
             
                        <div id="date_error">Please fill up the date you want to book</div> 
                      
                        </div>
                      <button id="butoni" name="book-button" type="submit">Book Now</button>
                     </form>
                     
        </div>
      </main>
   <!-- <script src="booknow.js"></script> !-->
</body>
</html>