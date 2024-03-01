<!-- Create a form contaning two input fields (Pro_id, QOH) and Update button. When the user clicks on the Update button the quantity of the Pro_id specified should get updated using a PHP script. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-6</title>
</head>

<form action="U2P6_code.php" method="post">
    <table>
        <tr>
            <td><label for="pro_id">Prouct ID : </label></td>
            <td><input type="text" id="pro_id" name="pro_id"></td>
        </tr>

        <tr>
            <td><label for="qoh">Quantity on Hand : </label></td>
            <td><input type="text" id="qoh" name="qoh"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="UPDATE"></td>
        </tr>
    </table>
</form>

</html>