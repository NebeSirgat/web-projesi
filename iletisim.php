<?php
$adsoyad = $_POST["adsoyad"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$cinsiyet = $_POST["cinsiyet"];
$mesaj = $_POST["mesaj"];

echo "<h2>İletişim Formu Bilgileri</h2>";
echo "<p><strong>Ad Soyad:</strong> $adsoyad</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Telefon:</strong> $telefon</p>";
echo "<p><strong>Cinsiyet:</strong> $cinsiyet</p>";
echo "<p><strong>Mesaj:</strong> $mesaj</p>";

if (isset($_POST["hobiler"])) {
    echo "<p><strong>Hobiler:</strong> ";
    foreach ($_POST["hobiler"] as $hobi) {
        echo $hobi . " ";
    }
    echo "</p>";
}

echo "<br><a href='iletisim.html'>Geri Dön</a>";
?>