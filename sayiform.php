<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAYI FORM</title>
</head>
<body>
    <H1>PHP TEMEL ÖDEV 3</H1>
    <form method="POST">
        <input type="number" name="num">
        <button type="submit">GÖNDER</button>
    </form>
</body>
</html>l

<?php

$num = $_POST['num'];

function checkNum($num){
  $message = '';

  $num == '' ? $message = "Lütfen bir sayı girin!" : (
  $num % 3 == 0 ? $message = "$num sayısının 3'e bölümünün sonucu: " . $num/3 : 
  (($num+1) % 3 == 0 ? $message = "$num sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $num + 1 :
    $message = "$num sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $num - 1)
  );
     return $message;
    }
    echo checkNum($num);
    ?>