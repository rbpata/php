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

    // Retrieve Pro_id from the form
    $pro_id = $_POST["pro_id"];

    // Delete record for the specified Pro_id
    $sql = "DELETE FROM product WHERE Pro_id = '$pro_id'";

    if($conn->query($sql) === TRUE)
    {
        echo "Record Deleted Successfully...!!";
    }
    else
    {
        echo "Error Deleting Record : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>