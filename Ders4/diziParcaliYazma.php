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
    $tel= "+905342026807";
    $yenitel= str_split($tel,3);//biz burada bir dizi oluşturduk ,teli 3 lü gruplara bölerek yenitel isimli dizinin içine eklemiş olmuş
    
    foreach ($yenitel as $key ) {//Burada sıra sıra yazdırmak için yenitel içindeki dizi elemanlarını foreach döngüsü ile sıra sıra yazdırıyoruz
        echo "$key ";
    }
    //echo implode(" ",$yenitel); //implode araştır
    ?>
</body>
</html>