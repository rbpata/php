<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database1";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // Retrieve form data
    $pro_id = $_POST["pro_id"];
    $pro_name = $_POST["pro_name"];
    $pro_price = $_POST["pro_price"];
    $qoh = $_POST["qoh"];

    // Insert data into product table
    $sql = "INSERT INTO product (Pro_id, Pro_name, Pro_price, QOH) VALUES ('$pro_id', '$pro_name', '$pro_price', '$qoh')";

    if(mysqli_query($conn, $sql))
    {
        echo "Record Inserted Successfully...!!";
    }
    else
    {
        echo "Error Inserting Record : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>