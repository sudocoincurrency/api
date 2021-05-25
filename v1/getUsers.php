<?php
$conn = new mysqli('', '', '', '');
$resolve = $conn->query("SELECT * FROM users");
$res = $resolve->fetch_assoc();

if ($resolve->num_rows > 0) {
    $num = 0;
    while ($row = $resolve->fetch_assoc()) {
        if ($num === 0) {
            echo $row['id'] . ',' . $row['coin'];
        } else {
            echo '|' . $row['id'] . ',' . $row['coin'];
        }

        ++$num;
    }
}
?>