<?php
require 'koneksi_shopee.php';
$Username = $_POST["Username"];
$Password = $_POST["Password"];

$query_sql = "INSERT INTO users_tbl (Username, Password)
VALUES ('$Username', '$Password')";

if (mysqli_query($conn, $query_sql)) {
    header ("Location: LOG IN.html");
} else {
    echo "pendaftaran gagal : " . mysqli_error($conn);
}