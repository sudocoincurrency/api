<?php 
if (!array_key_exists('password', $_POST)) { die('<h1>-1</h1>'); };
$password = base64_encode($_POST['password']);
$conn = new mysqli('', '', '', '');

$res = $conn->query("SELECT * FROM users WHERE pass = '$password'");

if ($res->num_rows > 0) {
    echo $res->fetch_assoc()['id'];
} else {
    die('<h1>-1</h1>');
}

?>