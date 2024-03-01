<!-- Create an array named $student, that sores 5 element bounded to a different keys and
access the same using the key element. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-1_Program-5</title>
</head>

<?php
    $student['name'] = "Virat";
    $student['rollno'] = 14;
    $student['age'] = 17;
    $student['course'] = "BCA";
    $student['result'] = "Distinction";

    echo $student['name'] . " is having Roll No. " . $student['rollno'] . " in course " . $student['course'] . " & he scored " . $student['result'];
?>

</html>