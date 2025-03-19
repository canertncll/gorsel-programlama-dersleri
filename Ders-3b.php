<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <h3>$_POST</h3>
<form action="" method="post">
    <label for="kullanici">Kullanıcı Adı: </label><input type="text" name="username" id="kullanici">
    <label for="sifre">Şifre: </label><input type="password" name="password" id="sifre">
    <br>
    <input type="submit" value="Giriş Yap">
</form>
<?php

$kullanici_adi   = @$_REQUEST                                              ["username"];
$kullanici_sifre = @$_POST["password"];

echo "formdan kullanıcı adı: $kullanici_adi <br>";
echo "formdan kullanıcı şifresi: $kullanici_sifre <br>";
?>
</head>
<body>
    
</body>
</html>