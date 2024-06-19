<?php
// Password in chiaro da hashare
$password = "root";

// Hash della password usando l'algoritmo bcrypt (raccomandato)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Stampare l'hash della password
echo "Password Hashata: " . $hashed_password;
?>
