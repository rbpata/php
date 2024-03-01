<!-- Write a program to count the total number of times a specific value appears in an
array. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-10</title>
</head>

<?php
    // Given array
    $numbers = array(5, 10, 7, 5, 2, 5, 8, 5, 10, 12);

    // Value to count
    $valueToCount = 5;

    // Count occurrences of the specific value
    $count = 0;
    foreach ($numbers as $number) {
        if ($number == $valueToCount) {
            $count++;
        }
    }

    echo "<h2>Count of $valueToCount in the array :</h2>";
    echo "The value $valueToCount appears $count times in the array.";
?>

</html>