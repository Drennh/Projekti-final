<?php
session_start();
include_once '../DashboardMapper/addMapper.php';
$fileAdded = new AddMapper();
$fileAddedList = $fileAdded->getAllAdds();

if (!isset($_SESSION['role'])) {
    header("Location:../Login/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="servicesbook.css?a">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <title>BD-Dent |Book Services</title>
</head>

<body>
    <header>
        <a href="../Home/home.php"> <img id="logo" src="../photos/LOGO3.png" alt=""></a>
    </header>
    <main>
        <div class="leftside">
        </div>
        <div class="rightside">
            <h1 class="help">How can we help?</h1>
            <?php
            $count = 1;
            foreach ($fileAddedList as $files) {

                if ($files['addtype'] == 'marketing') { ?>
                    <div>
                        <a href="../Book/bookNow.php" class="a">
                            <div class="indiv" id="div<?php echo $count++ ?>">
                                <h1><?php echo $files['headtext']; ?></h1>
                                <p class="description"><?php echo $files['description']; ?></p>
                            </div>
                        </a>
                <?php
                }
            }
                ?>

                    </div>
    </main>
    <script src="servicesbook.js?a"></script>
</body>

</html>