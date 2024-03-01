<!-- Write a program in PHP to sort the array of given 5 numbers in ascending and
descending order. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-9</title>
</head>

<?php
    // Given array of 5 numbers
    $numbers = array(23, 10, 5, 17, 8);

    // Sort in ascending order
    sort($numbers);
    echo "<h2>Sorted in Ascending Order :</h2>";

    foreach($numbers as $value)
    {
        echo $value . " ";
    }

    // Sort in descending order
    rsort($numbers);
    echo "<h2>Sorted in Descending Order :</h2>";
    
    foreach($numbers as $value)
    {
        echo $value . " ";
    }
?>

</html>