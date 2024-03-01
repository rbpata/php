<!-- Create a form containing two input fields (Name, Email_ID) and a submit button. When the user clicks on submit button, the form data should be sent for processing to PHP file ,which should display the welcome message with the email_id on the PHP page. Form data should be sent by HTTP GET/POST method. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-1</title>
</head>

<table>
    <form action="U2P1.php" method="post">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        
        <tr>
            <td><label for="email">Email_ID:</label></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SUBMIT"></td>
        </tr>
    </form>
</table>

<?php
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "<br>Welcome <b>$name</b>, ";
    echo "Your Email_ID is : <b> $email </b>";
?>

</html>