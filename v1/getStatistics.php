<?php
$conn = new mysqli('', '', '', '');
$resolve = $conn->query("SELECT * FROM config WHERE id = 1");
$res = $resolve->fetch_assoc();

echo $res['id'].'|'.$res['coinsMined'].'|'.$res['coinCap'];
?>