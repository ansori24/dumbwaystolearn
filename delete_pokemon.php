<?php

include 'connection.php';

$id   = $_GET['id'];

$query = "DELETE FROM pokemon_tb WHERE id = $id";

$result = mysqli_query($connection, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($connection).
            " - ".mysqli_error($connection));
    } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
}