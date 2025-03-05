<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h4>uygulama</h4>
<p>lorem cart curt</p>
    <?php
$metin ="<b>adü</b>";
$byazi=strtoupper($metin); //yaziyi buyuk harfe dönüştür
$kyazi=strtolower($byazi); //yaziyi küçük harfe dönüştür
$mb_byazi = mb_strtoupper($kyazi);  //yaziyi buyuk harfe dönüştür 
$mb_kyazi = mb_strtolower($mb_byazi); //yaziyi küçük harfe dönüştür
$ilkharf_buyuk_metin = ucfirst($mb_kyazi); //gelen metnin ilk harfini büyütür.
$ilkharf_buyuk_kelime = ucwords ($mb_kyazi); //gelen metnin ilk kelimeleri buyuk.

echo $metin;
echo "<br>";
echo $byazi;
echo "<br>";
echo $kyazi;
echo "<br>";
echo $mb_byazi;
echo "<br>";
echo $mb_kyazi;
echo "<br>";
echo $ilkharf_buyuk_metin;
echo "<br>";
echo $ilkharf_buyuk_kelime;
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br> karakter sayisi: " . strlen($metin) . "<br>";
echo "kelime sayisi: " . substr($metin,0,10);


$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit";
echo "<br>";
echo substr($lorem,0,10);
echo '<a href = "https://canertuncel.com.tr/" targets = "_blank">benim site</a>';




    ?>
    

    
    
</body>
</html>