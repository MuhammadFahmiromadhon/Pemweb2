<?php

include 'hubung.php';

$mode = $_POST['mode'];
$nama = $_POST['nama'];
$server = $_POST['server'];
$rank = $_POST['rank'];

$query = "INSERT INTO mobile_legends (mode, nama, server, rank)
            VALUES ('$mode', '$nama', '$server', '$rank')";

if ($conn->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error:" . $query . "<br>" . $conn->error;
}

$conn->close();