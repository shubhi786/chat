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
    
    body {
        overflow-x:hidden;
    }
        
.chats {
    width:100%;
    padding:2rem;
    border-bottom:1px solid rgba(0,0,0,0.1);
}

a {
        justify-content:center;
        color:#000;
        text-decoration:none;
        padding:3rem;
        font-size:2rem;
        font-family:'Raleway', sans-serif;
}

.item img {
    width:60px;
    height:60px;
    border-radius:50%;
}

    </style>
</head>
<body>

    <section class="profile_container">
        <div class="profile_heading">   
            <a href="main.php"><i class="fas fa-arrow-left left_arrow_back"></i></a>

            <h1 class="profile_title">Sandesh</h1>
            <?php
            
            try
            {
                require_once('dbconfig.php');

                $uname = $_GET['name'];

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
        
        <div class="chat_area">
            <h1 class="message">Hello</h1>
        </div>

        <div class="input_area">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="msg" placeholder="Write a message..."/>
                <button type="submit" value=""><i class="far fa-paper-plane"></i></button>
            </form>
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