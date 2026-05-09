<?php
$correctEmail = "b251210577@sakarya.edu.tr";
$correctPassword = "b251210577";

$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username) || empty($password)) {
    echo "<h2>Hata!</h2>";
    echo "<p>Alanlar boş bırakılamaz.</p>";
    echo "<a href='login.html'>Geri Dön</a>";
} 
else if ($username == $correctEmail && $password == $correctPassword) {
    echo "<h2>Hoşgeldiniz B251210577</h2>";
    echo "<p>Giriş başarılı.</p>";
} 
else {
    echo "<h2>Hatalı Giriş!</h2>";
    echo "<p>Kullanıcı adı veya şifre yanlış.</p>";
    echo "<a href='login.html'>Tekrar Dene</a>";
}
?>