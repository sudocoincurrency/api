<?php
$conn = new mysqli('', '', '', '');
$resolve = $conn->query("SELECT * FROM items");
$res = $resolve->fetch_assoc();

if ($resolve->num_rows > 0) {
    $num = 0;
   // echo var_dump($resolve->fetch_assoc());


    while ($row = $resolve->fetch_assoc()) {
        if ($num === 0) {
            echo $row['itemName'] . ',' . $row['amountToCharge'] . ',' . $row['sellerId'] . ',' . $row['stock'] . ',' . $row['itemId'] . ',' . $row['category'] . ',' . $row['contactSeller'] . ',' . $row['descr'];
        } else {
            echo '|' . $row['itemName'] . ',' . $row['amountToCharge'] . ',' . $row['sellerId'] . ',' . $row['stock'] . ',' . $row['itemId'] . ',' . $row['category'] . ',' . $row['contactSeller'] . ',' . $row['descr'];
        }

        ++$num;
    }
}
?>
