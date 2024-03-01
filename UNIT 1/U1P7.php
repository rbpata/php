<!-- Create two functions in PHP, parameterized and non parameterized for implementing
string concatenation operation. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-7</title>
</head>

<?php
    // Non-parameterized function
    function concatenateStrings() {
        $string1 = "Hello, ";
        $string2 = "World!";
        $result = $string1 . $string2;
        echo $result;
    }

    // Parameterized function
    function concatenateStringsParam($str1, $str2) {
        $result = $str1 . $str2;
        echo $result;
    }

    // Call the non-parameterized function
    echo "Non-parameterized function : ";
    concatenateStrings();
    echo "<br>";

    // Call the parameterized function
    echo "Parameterized function : ";
    $string1 = "Hello, ";
    $string2 = "World!";
    concatenateStringsParam($string1, $string2);
?>

</html>