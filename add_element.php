<?php

include 'connection.php';

$name   = $_POST['element'];

$query = "INSERT INTO element_tb (`name`) VALUES ('$name')";

$result = mysqli_query($connection, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($connection).
            " - ".mysqli_error($connection));
    } else {
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}