<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'webevening';

$con = mysqli_connect($host, $username, $password, $db_name);

if ($con) {
    'Connection Successful <br>';
} else {
    echo 'Not connected';
}

?>
