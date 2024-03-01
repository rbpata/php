<html>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "db1");

        if (!$conn)
        {
            die("Connection Failed : " . mysqli_connect_error());
        }

        $s = $_GET['sr'];

        if ($s != "")
        {
            $sel = "select * from product where pro_id like '" .$s. "'";
            $query = mysqli_query($conn, $sel);

            if (mysqli_num_rows($query) == 1)
            {
                echo "Product Already Exist...!!";
            }
            else
            {
                echo "Product doesn't exist... You can enter new record. <br><br>";
                echo "<form action='U3P8_insert.php' method='POST'>";
                echo "Product ID : <input type='text' name='proid' id='proid'/> <br>";
                echo "Name : <input type='text' name='proname' id='proname'/> <br>";
                echo "Price : <input type='text' name='proprice' id='proprice'/> <br>";
                echo "QOH : <input type='text' name='qoh' id='qoh'/> <br>";
                echo "<input type='submit' name='submit' value='Add Record'/> <br>";
                echo "</form>";
            }
        }
        else
        {
            echo "Please Enter Product ID...!!";
        }
    ?>
</body>
</html>