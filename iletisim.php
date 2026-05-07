<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];
$message = $_POST["message"];

echo "<h2>İletişim Formu Bilgileri</h2>";
echo "<p><strong>Ad Soyad:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Telefon:</strong> $phone</p>";
echo "<p><strong>Cinsiyet:</strong> $gender</p>";
echo"<P><strong>hobiler:</strong> $hobby</p>";
echo "<p><strong>Mesaj:</strong> $message</p>";

if (isset($_POST["hobiler"])) {
    echo "<p><strong>Hobiler:</strong> ";
    foreach ($_POST["hobiler"] as $hobi) {
        echo $hobi . " ";
    }
    echo "</p>";
}

echo "<br><a href='iletisim.html'>Geri Dön</a>";
?>