<?php
$servername = "localhost";
$database = "db_users";
$Username = "root";
$Password = "";

$conn = mysqli_connect($servername, $Username, $Password, $database);

if(!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
