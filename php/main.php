<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['uname']; ?></title>

    <!-- stylesheets includes -->
    <link rel="stylesheet" href="../css/style.css"/>
    <!-- stylesheets includes -->

    <!-- fonts includes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Raleway:ital,wght@1,200&family=Zen+Loop&display=swap" rel="stylesheet">
    <!-- fonts includes -->

    <!-- bootstrap css files -->    
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"/> -->
    <!-- <link rel="stylesheet" href="css/mdb.css"/>
    <link rel="stylesheet" href="css/mdb.min.css"/> -->
    <!-- bootstrap css files -->

    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>

    <section class="container">
        <div class="heading">
            <h1 class="profile_name">fheha</h1>
        </div>
    </section>



     <!-- bootstrap files includes js -->
     <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- bootstrap files includes js -->

</body>
</html>