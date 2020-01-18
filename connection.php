<?php

$host    = "localhost";
$user    = "root";
$pass    = "";
$nama_db = "pokedumb";
$connection = mysqli_connect($host, $user, $pass, $nama_db);

if (!$connection) {
    die("Koneksi dengan database gagal: ".mysql_connect_error());
}