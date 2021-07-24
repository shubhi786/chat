<?php

try {
    $hostname = "localhost";
    $username = "root";
    $pass = "" ;
    $dbname = "chat";

    $conn = mysqli_connect($hostname,$username,$pass);

    if(!$conn)
    {
        throw new Exception(mysqli_error($conn));
    }
    else
    {
        mysqli_select_db($conn,$dbname);
    }
}
catch (Exception $e) 
{
    echo $e;
}

?>