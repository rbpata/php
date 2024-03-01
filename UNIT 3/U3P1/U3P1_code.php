<html>

<?php
    $name = $_GET['uname'];

    if($name=="")
    {
        echo "Please Enter Name...!!";
    }
    else
    {
        echo "Welcome : " . $name;
    }
?>

</html>