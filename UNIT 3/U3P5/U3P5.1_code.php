<?php
    $r = $_GET['selected'];
    $str = explode(" ", $r); // split a string (based on given delimiter) in different strings.

    for ($i=0; $i<count($str); $i++)
    {
        echo $str[$i] . "<br>";
    }
?>