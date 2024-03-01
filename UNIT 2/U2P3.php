<!-- Write a PHP script for creating a product table in the specified database with fields Pro_id, Pro_name, Pro_price, QOH. Also display an acknowledgement for the same. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-3</title>
</head>

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

    // Create table
    $sql = "CREATE TABLE product (
        Pro_id INT AUTO_INCREMENT PRIMARY KEY,
        Pro_name VARCHAR(20) NOT NULL,
        Pro_price DECIMAL(10, 2) NOT NULL,
        QOH INT NOT NULL
    )";

    if(mysqli_query($conn, $sql))
    {
        echo "Table <b>'product'</b> Created Successfully...!!";
    }
    else
    {
        echo "Error Creating Table : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>

</html>