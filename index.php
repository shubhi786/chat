<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <!-- stylesheets includes -->
    <link rel="stylesheet" href="css/style.css"/>
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

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

</head>
<body>
    
    <section>
        <h1 class="main_heading">Chattappa</h1>

        <div class="login">
            <h2 class="heading">Login</h2>    

            <form action="" method="post" enctype="multipart/form-data">
            <?php
            
            try
            {
                require_once('php/dbconfig.php');

                if(isset($_POST['login']))
                {
                    $uname = $_POST['uname'];
                    $pass = $_POST['pass'];

                    $sql = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass' ";
                    $run = $conn->query($sql);

                    if($run->num_rows > 0) 
                    {
                        if($run) 
                        {
                            header('location:php/main.php');
                            $_SESSION['uname'] = $uname;
                        }
                        else
                        {
                            throw new Exception("Invalid credentials");
                        }
                    }
                }
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }

            ?>
                <div class="parent">
                    <input type="text" class="" name="uname" />
                    <label for="">Username</label>
                </div>

                <div class="parent">
                    <input type="password" class="" name="pass" />
                    <label for="">Password</label>
                </div>

                <input type="submit" name="login" value="Login"/>

                <p class="signup_cred">If new user, Please <a href="php/signup.php">Sign up</a>.</p>
            </form>
        </div>
    </section>





    <!-- bootstrap files includes js -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- bootstrap files includes js -->

</body>
</html>