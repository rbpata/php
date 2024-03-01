<?php
$x = $_GET["x"];

$conn = mysqli_connect("localhost", "root", "", "db1");

if (!$conn) {
    die("Error" . mysqli_connect_error());
}

if (!empty($x)) {
    $sql = "SELECT * FROM product WHERE pro_name LIKE '%" . $x . "%'";
    $query = mysqli_query($conn, $sql);

    echo "<table width=100% border=1>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
        </tr>";
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr> 
                <td>$row[pro_id]</td>
                <td>$row[pro_name]</td>
                <td>$row[pro_price]</td>
                <td>$row[qoh]</td>
            </tr>";
    }
} else {
    echo "try Again later..";
}
?>
