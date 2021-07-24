<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

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
    
    <section>
        <h1 class="text-center">Chattappa</h1>

        <div class="signup">
            <h2 class="heading">Signup</h2>    

            <form action="" method="post" enctype="multipart/form-data">

            <?php

            try
            {
                require_once('dbconfig.php');
            
            if(isset($_POST['signup']))
            {
                $fname = $_POST['fname'];
                $uname = $_POST['uname'];
                $pass = $_POST['pass'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
                $desc = $_POST['desc'];

                $filename = $_FILES['img']['name'];
                $tmp_name = $_FILES['img']['tmp_name'];

                $folder = '../img/'.$filename;

                $arr = array('jpg','jpeg','png','svg');
                $diff = explode('.',$filename);
                $check = strtolower(end($diff));

                if(in_array($check,$arr))
                {
                    move_uploaded_file($tmp_name,$folder);

                    $sql = "SELECT * FROM users WHERE uname='$uname' ";
                $run = $conn->query($sql);

                if($run->num_rows > 0)
                {
                    throw new Exception("You cannot signup because it already exists");
                }
                else
                {
                    $sql1 = "INSERT INTO users VALUES('0','$fname','$uname','$pass','$mobile','$email','$address','$gender','$folder','$desc',now() )";
                    $run1 = $conn->query($sql1);
                    
                    if($run1)
                    {
                        echo "inserted";
                    }
                    else
                    {
                        throw new Exception(mysqli_error($run1));
                    }
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
                    <input type="text" class="" name="fname" />
                    <label for="">Full Name</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="uname" />
                    <label for="">Username</label>
                </div>

                <div class="parent">
                    <input type="password" class="" name="pass" />
                    <label for="">Password</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="mobile" />
                    <label for="">Mobile</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="email" />
                    <label for="">Email</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="address" />
                    <label for="">Address</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="gender" />
                    <label for="">Gender</label>
                </div>

                <div class="parent">
                    <input type="file" class="" name="img" />
                    <label for="">Image</label>
                </div>

                <div class="parent">
                    <input type="text" class="" name="desc" />
                    <label for="">Description</label>
                </div>

                <input type="submit" name="signup" value="Sign up"/>

                <p class="signup_cred">If an existing user, Please <a href="../index.php">Log in</a>.</p>
            </form>
        </div>
    </section>





    <!-- bootstrap files includes js -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- bootstrap files includes js -->

</body>
</html>