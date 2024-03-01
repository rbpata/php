<!-- Create a form contaning one input field(Pro_id) and a Delete button. When the user clicks on the Delete button a PHP script should get executed and should delete the record of the product for the Pro_id specified. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-7</title>
</head>

<form action="U2P7_code.php" method="post">
    <table>
        <tr>
            <td><label for="pro_id">Product ID : </label></td>
            <td><input type="text" id="pro_id" name="pro_id"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="DELETE"></td>
        </tr>
    </table>
</form>

</html>