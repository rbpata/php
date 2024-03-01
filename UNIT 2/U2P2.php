<!-- Write a PHP script for that creates a database named "DB-1"in MySQL. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-2</title>
</head>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE database1";

    if(mysqli_query($conn, $sql))
    {
        echo "Database <b>'database1'</b> Created Successfully...!!";
    }
    else
    {
        echo "Error Creating Database : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>

</html>