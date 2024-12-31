<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "boston";

$conn = mysqli_connect("localhost", "root", "", "boston");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
