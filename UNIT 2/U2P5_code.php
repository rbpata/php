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

    // Search for product details based on Pro_id
    $sql = "SELECT * FROM product WHERE Pro_id = '$pro_id'";
    
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        // Display product details
        while($row = $result->fetch_assoc())
        {
            echo "Pro_id : " . $row["Pro_id"] . "<br>";
            echo "Pro_name : " . $row["Pro_name"] . "<br>";
            echo "Pro_price : " . $row["Pro_price"] . "<br>";
            echo "QOH : " . $row["QOH"] . "<br>";
        }
    }
    else
    {
        echo "No Record Found...!!";
    }

    mysqli_close($conn);
?>