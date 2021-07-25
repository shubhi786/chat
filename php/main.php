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

    <style>
    

        

    </style>
</head>
<body>

    <section class="profile_container">
        <div class="profile_heading">   
            <a href="../index.php"><i class="fas fa-arrow-left left_arrow_back"></i></a>

            <h1 class="profile_title">Sandesh</h1>
            <?php
            
            try
            {
                require_once('dbconfig.php');

                $uname = $_SESSION['uname'];

                $get_img = "SELECT * FROM users WHERE uname='$uname' ";
                $run = $conn->query($get_img);

                if($run->num_rows > 0)
                {
                    while($row = $run->fetch_assoc())
                    {?> 
                
            <img class="" src="<?php echo $row['img']; ?>" alt="profile"/>
            <?php
                    }
                }
                else
                {
                    throw new Exception('Something went wrong');
                }
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }

            ?>
        </div>
        
        <div class="chats">
            <div class="item">
                <a href="chat.php?name=iqbal">
                    <img src="../img/my.jpg" alt=""/>    
                    Iqbal
                </a>
            </div>
        </div>
       

        
    </section>



     <!-- bootstrap files includes js -->
     <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- bootstrap files includes js -->

    <!-- font awesome kit code -->
    <script src="https://kit.fontawesome.com/ea7b70474d.js" crossorigin="anonymous"></script>
    <!-- font awesome kit code -->

</body>
</html>