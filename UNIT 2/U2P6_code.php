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
    $qoh = $_POST["qoh"];

    // Update quantity for the specified Pro_id
    $sql = "UPDATE product SET QOH = '$qoh' WHERE Pro_id = '$pro_id'";

    if($conn->query($sql) === TRUE)
    {
        echo "Record Updated Successfully...!!";
    }
    else
    {
        echo "Error Updating Record : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>