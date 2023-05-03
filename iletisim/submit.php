<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$language = $_POST['language'];
$message = $_POST['message'];


echo "<h1>formu doldurduğunuz için teşekkür ederiz</h1>";
echo "<p>isim: $name</p>";
echo "<p>E-posta: $email</p>";
echo "<p>Cinsiyet: $gender</p>";
echo "<p>telefon: $phone</p>"
echo "<p>Tarih: $date</p>";;
echo "<p>Dil: $language</p>";
echo "<p>mesaj: $message</p>";



?>