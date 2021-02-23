<?php
session_start();
  include_once '../UsersMapper/userMapper.php';
  include_once '../MessagesMapper/messageMapper.php';
  include_once '../BookMapper/bookMapper.php';
  include_once '../DashboardMapper/addMapper.php';

  if(isset($_SESSION['role'])&&$_SESSION['role']=='1'){
    $mapper = new UserMapper();
    $userList=$mapper->getAllUsers();

    $messages= new MessagesMapper();
    $messagesList=$messages->getAllMessages();
    
    $reservations= new BookMapper();
    $reservationsList=$reservations->getAllReservations();

    $fileAdded= new AddMapper();
    $fileAddedList=$fileAdded->getAllAdds();
  }else{
    header("Location:../Home/home.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="dashboard.css?a">
    <link rel="stylesheet" href="dashboardResponsive.css">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD-Dent | Dashboard</title>
</head>
<body>

    <header>
        <h2 class="dashboardtxt" >Dashboard</h2>
        <p class="dashboardtxt">Home/dashboard</p>
        <a href="../Home/home.php"> <img id="logo1" src="../photos/LOGO2.png" alt=""></a> 
        
    </header>
    
  <nav>

    <ul class="navigationlinks">
      <li id="usersection">Users</li>
      <li id="showtextadder">Add At Home</li>

    </ul>
  </nav>
    <div class=" section active" id="usersinformations">
      
    <div class="infos">
      <div class="userbox">
          <img class="usersicon" src="../icons/users.png" alt="">
          <h3>Users</h3>
          <h1 class="usersNum"><?php echo count($userList); ?></h1>
      </div>
      <div class="reservationsbox">
        <img class="resicon" src="../icons/reservations.png" alt="">
          <h3>Reservations</h3>
          <h1 class="reservationNum"><?php echo count($reservationsList); ?></h1>
      </div>

      <div class="messagebox">
        <img class="messageicon" src="../icons/messages.png" alt="">
          <h3>Messages</h3>
          <h1 class="messagesNum"><?php echo count($messagesList); ?></h1>
      </div>

    </div>

    
  
      <!--Users Informations Fillimi I Kodit-->
      <div  class="showhide usersinformation active">
        <table id="usersinformationheader">
            <tr>
      
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Role</th>
            </tr>
             <?php
                foreach ($userList as $user) {
                ?>
            <tr>
              <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['phone']; ?></td>
           
                <?php
                    if($user['role']==1){
                      ?>
                    
                       <td><?php echo 'Admin' ?>  <a href=<?php echo "../UsersMapper/deleteUser.php?id=" . $user['userid'];
                                    ?>> <button class="active" id="UserDelButton">Delete</button> </a>
                                                  <a href=<?php echo "../UsersMapper/removeAdmin.php?id=" . $user['userid'];
                                    ?>> <button class="active" id="EditButton">Remove A</button> </a></td> <?php
                    } else{
                     ?> <td><?php echo 'User' ?><a href=<?php echo "../UsersMapper/deleteUser.php?id=" . $user['userid'];
                     ?>> <button class="active" id="UserDelButton">Delete</button> </a>
                     
                     <a href=<?php echo "../UsersMapper/makeAdmin.php?id=" . $user['userid'];?>> <button  class="active" id="EditButton">Make A</button>
                     </a></td>  <?php
                    }
                ?>
                                  
                <?php
                }
                ?>
        
            </tr>
            
          </table>
        </div>
      <!--Users Informations Mbarimi I Kodit-->


      <!--Reservations Informations Fillimi I Kodit-->

      <div class=" showhide reservationsmainsdiv non-active">
        <table id="ReservationsTable">
            <tr>
              <th>Full Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Reservation Day</th>
            </tr>
            <?php
                foreach ($reservationsList as $reservation) {
                ?>
            <tr>
              <td><?php echo $reservation['name']; ?></td>
                <td><?php echo $reservation['phone']; ?></td>
                <td><?php echo $reservation['email']; ?></td>
                <td><?php echo $reservation['date']; ?>
                <a href=<?php echo "../ReservationMapper/cancelReservation.php?id=" . $reservation['reservationId'];?>><button id="cancelReservation">Cancel</button> </a></td>
               
                                  
                <?php
                }
                ?>
                </tr>
          </table>
        </div>
  
   <!--Reservations Informations Mbarimi I Kodit-->
    
   <!--Messages Informations Mbarimi I Kodit-->

   <div class=" showhide messagesmaindiv non-active">

    <table id="MessagesTable">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php
                foreach ($messagesList as $message) {
                ?>
            <tr>
              <td><?php echo $message['name']; ?></td>
                <td><?php echo $message['email']; ?></td>
                <td><?php echo $message['message']; ?>
                <a href=<?php echo "../MessagesMapper/deleteMessage.php?id=" . $message['messageId'];
                                    ?>> <button class="active">Delete</button> </a></td>
               
                                  
                <?php
                }
                ?>
                </tr>
     
    </table>
      </div>
</div>


  <div  class=" section non-active" id="addsomething">

    <!--Fillimi per katroret qe shfaqin tabelat -->
      <div class="addhere">

        <div id="homePageBox" class="homePage">
          <h1>Home Page</h1>
        </div>

      </div>
      <!--Mbarimi per katroret qe shfaqin tabelat -->


      <div class="showhide homePageDiv active">

        <table id="homepageDoctorinformation">
            <tr>
      
              <th>Doctor Name</th>
              <th>Doctor Image</th>
              <th>Doctor Description</th>
             
            </tr>

            <?php
                foreach ($fileAddedList as $files) {
                ?>
                <?php 
                    if($files['addtype']=='doctor'){?>
                      <td><?php echo $files['headtext']; ?></td>
                <td>  <img id="photosFromDatabase" src="../photos/<?php echo $files['image']; ?>"> </td>
                <td><?php echo $files['description']; ?>
                <a href=<?php echo "../DashboardMapper/deleteContent.php?id=" . $files['id'];
                                    ?>> <button class="active">Delete</button> </a></td> <?php           
                    }
                ?>
            <tr>
              
               
                                  
                <?php
                }
                ?>
                </tr>
            
              <div class="addContent">
                <form method="POST" action="../DashboardMapper/dashboardVerify.php">
                   <p> Please select where you want to add:</p>
                   <input type="radio" name="add" value="doctor">
                   <label for="doctors">Doctors</label><br>
                   <input type="radio" name="add" value="marketing">
                   <label for="marketing">Marketing</label><br>

                   <label id="headertxt" for="headertxt">Header text:</label>
                    <input type="text" id="headertxt" name="headertxt"><br>
                <label for="details">Details</label><br>
                    <textarea name="details" id="details" rows="5" maxlength="300" placeholder="Your Message Here"></textarea>


                   <input type="file" id="myfile" name="myfile">

                   <input name="dashboard-button" id="addSumbit" type="submit" value="Submit">
              </form>

            </div>
            
          </table>


          <table id="homepageMarketinginformation">
            <tr>
      
              <th>Header Text</th>
              <th>Marketing Img</th>
              <th>Description</th>
             
            </tr>

            <?php
                foreach ($fileAddedList as $files) {
                ?>
                <?php 
                    if($files['addtype']=='marketing'){?>
                      <td><?php echo $files['headtext']; ?></td>
                <td>  <img id="photosFromDatabase" src="../photos/<?php echo $files['image']; ?>"> </td>
                <td><?php echo $files['description']; ?>
                <a href=<?php echo "../DashboardMapper/deleteContent.php?id=" . $files['id'];
                                    ?>> <button class="active">Delete</button> </a></td> <?php           
                    }
                ?>
            <tr>
              
                <?php
                }
                ?>
                </tr>
          </table>
        </div>

</body>
<script src="dashboard.js"></script>
</html>