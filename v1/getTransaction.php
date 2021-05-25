<?php
$gid = parse_url($_SERVER['REQUEST_URI']);
if (!array_key_exists('query', $gid)) { die('<h1>-1</h1>'); };

if (strpos( $gid['query'], "'" ) !== false) {
    die('<h1>-1</h1>');
}

//echo $gid['query'] . '<br>';

$conn = new mysqli('', '', '', '');
$mysql = "SELECT * FROM transactions WHERE transactionId = " . $gid['query'];

//echo $mysql . '<br>';

$resolve = $conn->query($mysql);
$row = $resolve->fetch_assoc();

//var_dump($resolve);
//echo '<br>';
//var_dump($row);
//echo '<br>';

if ($resolve->num_rows > 0) {
    echo $row['sendingUserId'] . ',' . $row['recievingUserId'] . ',' . $row['amountTransferred'] . ',' . $row['transactionId'] . ',' . $row['reason'];
} else {
    echo '<h1>-1</h1>';
}
?>