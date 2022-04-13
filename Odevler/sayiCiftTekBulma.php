<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    //rand metodu rastgele sayı üretmemizi sağlayan metottur. rand(min,max) böylece değer aralığını belirtebiliriz.
    /*$sayi=rand();
    echo $sayi;
    echo "<br>";

    echo $sayi % 2;
    */
    $sayi=rand(1,100);//1 ve 3 dahil oluyor
    echo $sayi;
    echo "<br>";
    if (($sayi % 2)==0) {
        echo "Sayı çift";
    }
    else {
        echo "Sayı tek";
    }
    ?>
</body>
</html>