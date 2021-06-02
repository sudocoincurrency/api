<?php
$conn = new mysqli('', '', '', '');
$resolve = $conn->query("SELECT * FROM config WHERE id = 1");
$res = $resolve->fetch_assoc();

$res2 = $conn->query("SELECT * FROM users ORDER BY coin DESC LIMIT 1")->fetch_assoc();

$res3 = $conn->query("SELECT * FROM users")->num_rows;

echo $res['id'].'|'.$res['coinsMined'].'|'.$res['coinCap'].'|'. $res2['id'] . '|' .$res2['coin'] . '|' . $res3;
?>