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
    $sayi=rand(1,100);
    echo $sayi ;
    echo "<br>";
    if($sayi<50){
        echo "Kaldınız";
    
    }
    else echo "Geçtiniz";
    
    ?>
</body>
</html>