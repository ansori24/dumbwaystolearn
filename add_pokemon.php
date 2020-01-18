<?php

include 'connection.php';

$name   = $_POST['name'];
$str     = $_POST['str'];
$def    = $_POST['def'];
$photo    = $_POST['photo'];

$query = "INSERT INTO pokemon_tb (`name`, `str`, `def`, `photo`) VALUES ('$name', '$str', '$def', '$photo')";

$result = mysqli_query($connection, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($connection).
            " - ".mysqli_error($connection));
    } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}