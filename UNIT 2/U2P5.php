<!-- Create a form contaning one input field(Pro_id) and a search button. When the user clicks on the Search button a PHP script should get executed and should display the details of the product for the Pro_id specified. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-5</title>
</head>

<form action="U2P5_code.php" method="post">
    <table>
        <tr>
            <td><label for="pro_id">Product ID : </label></td>
            <td><input type="text" id="pro_id" name="pro_id"></td>
        </tr>

        <tr>
            <td colspan="2"><input type="submit" value="SEARCH"></td>
        </tr>
    </table>
</form>

</html>