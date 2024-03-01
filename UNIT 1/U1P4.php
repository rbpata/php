<!-- Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-4</title>
</head>

<?php
    $sub = array("C", "C#", "PHP", "JAVA", "PYTHON");

    echo "Displaying Array Elements using Foreach...!! <br>";

    // foreach
    foreach($sub as $value)
    {
        echo $value . "<br>";
    }

    // for loop
    $length = count($sub);
    
    echo "<br> Displaying Array Elements using For Loop...!! <br>";

    for($i=0; $i<$length; $i++)
    {
        print $sub[$i] . "<br>";
    }
?>

</html>