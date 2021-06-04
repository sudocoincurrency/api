<?php
$gid = parse_url($_SERVER['REQUEST_URI']);
if (!array_key_exists('query', $gid)) { die('<h1>-1</h1>'); };

if (strpos( $gid['query'], "'" ) !== false) {
    die('<h1>-1</h1>');
}

$conn = new mysqli('', '', '', '');


$resolve = $conn->query("SELECT * FROM config WHERE id = 1");
$res = $resolve->fetch_assoc();

$res2 = $conn->query("SELECT * FROM users ORDER BY coin DESC LIMIT 1")->fetch_assoc();

$res3 = $conn->query("SELECT * FROM users")->num_rows;


switch ($gid["query"]) {
    case 'configId':
        echo $res['id'];
    break;

    case 'coinsMined':
        echo $res['coinsMined'];
    break;
    
    case 'coinCap':
        echo $res['coinCap'];
    break;
        
    case 'richestUser':
        echo $res2['id'];
    break;
        
    case 'richestUsersCoinCount':
        echo $res2['coin'];
    break;

    case 'userCount':
        echo $res3;
    break;

    default:
        echo '<h1>-1</h1>';
}
?>