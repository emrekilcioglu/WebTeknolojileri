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
    
    $isimler = array();
    $isimler[]="Ahmet";
    $isimler[]="Mehmet";
    $isimler[]="Ali";
    $isimler[]="Ayşe";
    echo "<pre>";
    print_r($isimler);
    echo "<pre>";

    $isimler2 = array();

    $isimler2["isim1"]= "Mahmut";
    $isimler2["isim2"]= "Mahmut";
    $isimler2[]= "Mahmut";
    $isimler2[]= "Mahmut";
    $isimler2[]= "Mahmut";

    echo "<pre>";
    print_r($isimler2);
    echo "<pre>";

    $ogrenciDetay=array(
        "id"   => 1,
        "adi"  => "Nurullah",
        "soyai" => "Yıldız",
        "bolum" => "Bİlgisayar",
        "yas"   => "25",
        "dersler" => array(
            "ders1" =>"Veri Tabanı",
            "ders2" =>"Web Programlama",
            "ders3" =>"Java",
        )
        );
        //alt alta yazdır ödevi
        //dizinin içindeki diziden foreach yapabiliyoruz

    

    ?>
    <br></br>
    <hr>
    <h3>Koşul İfadeleri(If-Else) </h3>
    <p> İf-Else Bloklarında öncelikle koşul belirtirlir ve sonraki dallanma koşula göre devam eder</p>
    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise.(Genellikle Matematiksel bir Karşılaştırma yapılır)</li>
        <li> === ($a === $b) Denk ise.(Genellikle String bir Karşılaştırma yapılır)</li>
        <li> != ($a != $b) Denk ise.(Genellikle Matematiksel bir Karşılaştırma yapılır)</li>
        <li> !== ($a !== $b) Denk değil ise.(Genellikle String bir Karşılaştırma yapılır)</li>
        <li> > ($a > $b) büyük ise.</li>
        <li> >= ($a >= $b) büyük veya esit ise.</li>
        <li> < ($a > $b) küçük ise.</li>
        <li> <= ($a > $b) küçük ve eşit ise.</li> 
    </ol>
    <h3> Büyüktür küçüktür büyük eşittir bunlar java ile aynı</h3>

    <ol>
        <li>! (olumsuzsa) (!$a) --> $a'nın değeri false ise true döner.Aksini yapar</li>
        <li>&& (ve) java ile aynı</li>
        <li>|| veya java ile aynı</li>
        
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar</li>
        <li>Else son kapanış kşuludur.(herhangi bir koşul belirtmeye gerek yok</li>
        <li></li>
        <li></li>
        <li></li>
    </ol>

    <?php
    
    if (condition) {
        # code...
    }
    elseif (condition) {
        # code...
    }
    $sayi = 123;
    $sayi2 = 345;
    $metin = "Adü";

    if ($sayi) {
        echo "If bloğu çalıştı:$sayi";
        //bu kod çalışır çünkü değişkenin içinde değer var bu true dur ama içi boşsa false
    }

    if (!$sayi) {
        echo "if";
    }
    else {
        echo "else";
    }//else çalışır biz true değeri ! diyerek false yaptık

    
    ?>



</body>
</html>