<?php

    $con=mysqli_connect("localhost","my_user","my_password","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // escape variables for security
    $username = mysqli_real_escape_string($con, $_POST['Username']);
    $password = mysqli_real_escape_string($con, $_POST['Password']);

    //Encryption
    $hashFormat = "@2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    $sql = "INSERT INTO Persons (UserName, Password) VALUES ('$username', '$password')";

    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    echo "1 record added";

    mysqli_close($con);
?>