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
    $yas=(2022-rand(1950,2022));
    echo $yas;
    echo "<br>";
    if ($yas<18) {
        echo "Yaşınız ehliyet almaya yetmiyor". (18 - $yas). "  sene sonra geliniz";
         
    }
    else echo "Ehliyet alabilirsiniz";
    
    ?>
</body>
</html>