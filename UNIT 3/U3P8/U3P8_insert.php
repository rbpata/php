<?php
    $proid = $_POST["proid"];
    $proname = $_POST["proname"];
    $proprice = $_POST["proprice"];
    $qoh = $_POST["qoh"];

    $conn = mysqli_connect("localhost", "root", "", "db1");
    
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    $addquery = "insert into product (pro_id, pro_name, pro_price, qoh) values ('$proid', '$proname', '$proprice', '$qoh')";

    if (mysqli_query($conn, $addquery))
    {
        echo "New Record Inserted Successfully...!!";
    }
    else
    {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
?>