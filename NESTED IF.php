<?php
$username = "admin";
$password = "1234";
$isAdmin = false;

if($username == "admin" && $password == "1234"){
    if($isAdmin){
        echo"Selamat datang Administor";
    } else {
        echo"Selamat datang user";
    }
} else {
    echo"Maaf Username dan Password Salah!";
}
?>