<?php
$conn = new mysqli('', '', '', '');
$resolve = $conn->query("SELECT * FROM transactions");
$res = $resolve->fetch_assoc();

if ($resolve->num_rows > 0) {
    $num = 0;
    while ($row = $resolve->fetch_assoc()) {
        if ($num === 0) {
            echo $row['sendingUserId'] . ',' . $row['recievingUserId'] . ',' . $row['amountTransferred'] . ',' . $row['transactionId'] . ',' . $row['reason'];
        } else {
            echo '|' . $row['sendingUserId'] . ',' . $row['recievingUserId'] . ',' . $row['amountTransferred'] . ',' . $row['transactionId'] . ',' . $row['reason'];
        }

        ++$num;
    }
}
?>