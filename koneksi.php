<?php

$koneksi = mysqli_connect("localhost", "root", "", "firebowl");

if (!$koneksi) {
    echo "<script>alert('Koneksi gagal')</script>";
}