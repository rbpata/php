<!-- Write a program in PHP to demonstrate the use of multidimensional arrays. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-6</title>
</head>

<?php
    $cars = array(
        array("Maruti", 22),
        array("BMW", 15),
        array("Tata", 5),
        array("Rolls Royce", 17)
    );

    echo $cars[0][0] . " in Stock : " . $cars[0][1] . " Cars <br>";
    echo $cars[1][0] . " in Stock : " . $cars[1][1] . " Cars <br>";
    echo $cars[2][0] . " in Stock : " . $cars[2][1] . " Cars <br>";
    echo $cars[3][0] . " in Stock : " . $cars[3][1] . " Cars <br>";
?>

</html>