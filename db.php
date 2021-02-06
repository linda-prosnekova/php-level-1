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


$query = mysqli_query($mysqli, "SELECT * FROM gallery");

$images = array();
while ($row = mysqli_fetch_assoc($query))
    $images = $row;

foreach ($images as $row)
    echo $row;
