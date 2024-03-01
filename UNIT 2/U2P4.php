<!-- Create a form contaning four input fields(Pro_id, Pro_name, Pro_price, QOH) and Submit button. When the user clicks on the submit button an PHP script should be executed which inserts the record in the product table. -->

<!DOCTYPE html>
<html>
<head>
    <title>Unit-2_Program-4</title>
</head>

<form action="U2P4_code.php" method="post">
    <table>
        <tr>
            <td><label for="pro_id">Prouct ID : </label></td>
            <td><input type="text" id="pro_id" name="pro_id"></td>
        </tr>

        <tr>
            <td><label for="pro_name">Product Name : </label></td>
            <td><input type="text" id="pro_name" name="pro_name"></td>
        </tr>
        
        <tr>
            <td><label for="pro_price">Product Price : </label></td>
            <td><input type="text" id="pro_price" name="pro_price"></td>
        </tr>
        
        <tr>
            <td><label for="qoh">Quantity on Hand : </label></td>
            <td><input type="text" id="qoh" name="qoh"></td>
        </tr>
        
        <tr>
            <td colspan="2"><input type="submit" value="SUBMIT"></td>
        </tr>
    </table>
</form>

</html>