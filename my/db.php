<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'autumn';
$db_port = 8889;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

$result = mysqli_query($mysqli, "SELECT COUNT(id) as count from basket where session_id='{$session}'");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
