<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "fadly" && $password == "fadly123"){
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}