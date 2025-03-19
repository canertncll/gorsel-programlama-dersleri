<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global değişkenler</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_GET</h4>

    <form action="" method="get">
    <label for="">Kullanıcı Adı: </label><input type="text" name="" id="kullanici">
    <label for="sifre">Şifre: </label><input type="password" name="" id="sifre">
    <br>
    <input type="submit" value="Giriş Yap">
    </form>>

    <?php
    $kullanici = $_GET["username"];
$kullanici_sifresi = $_GET["password"];
        echo "Formdan Kullanıcı Adı: $kullanici_adi <br>";
        echo "Formdan Kullanıcı Şifresi: $kullanici_sifresi <br>";
    ?>
    
</body>
</html>