<!-- Create a program in PHP to demonstrate the use of If ... Else and switch statements. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-3</title>
</head>

<?php
    $d = date("D");

    // if-else
    if($d == "fri")
        echo "Have a Nice Weekend...!!";
    else
        echo "Have a Nice Day...!!";

    echo "<br>----------------------------------------<br>";

    // switch case
    $favColor = "red";

    switch($favColor)
    {
        case "red" : echo "Your Favourite Color is Red...!!";
                    break;

        case "blue" : echo "Your Favourite Color is Blue...!!";
                    break;

        case "green" : echo "Your Favourite Color is Green...!!";
                    break;

        default : echo "Your Favourite Color is Neither Red, Blue or Green...!!";
                    break;
    }
?>

</html>