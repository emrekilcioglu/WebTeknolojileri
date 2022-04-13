<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>

<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dizi oluşturmak için array() fonksiyonu veya [] kullanılabilir.</li>
        <li>Dizi içerisinde farklı türden birçok değer bulunabilir.(int, string, double, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $diziAdi" ile dizi içeriği ekrana yazdırılamaz Sadece bir elemanı yazdrırılabilir. Array to String Conversion hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir.</li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direk yazılabilir.</li>
        <li>Dizinin elemanları birbirinden virgül(,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

    <?php

    $dizi1 = array(1, 2, 3, "Alican", "Ocak", "Şubat");//bu 6 elemanlı bir dizidir.Tavsiye edilen yönetem budur array diye belirtmek
    $dizi2 = [1, 2, 3, "Alican"];

    echo "<pre>";//preler daha güzel gözüksün diyedi
    echo "<p> dizi içini gösterir<p>";
    print_r($dizi1);//dizi içini yazdırmak için kullanılır
    echo "</pre>";

    echo "Dizinin 1. elemanı: " . $dizi1[1] . "<br>";
    echo "Dizinin 1. elemanın Türü: " . gettype($dizi1[1]) . "<br>";


    echo "Dizinin 5. elemanı: " . $dizi1[4] . "<br>";
    echo "Dizinin 5. elemanın Türü: " . gettype($dizi1[4]) . "<br>";


    echo "Dizinin 0. İndisi: <b> $dizi1[0]</b><br>";
    echo "Dizinin 1. İndisi: <b> $dizi1[1]</b><br>";
    echo "Dizinin 2. İndisi: <b> $dizi1[2]</b><br>";
    echo "Dizinin 3. İndisi: <b> $dizi1[3]</b><br>";
    echo "Dizinin 4. İndisi: <b> $dizi1[4]</b><br>";
    echo "Dizinin 5. İndisi: <b> $dizi1[5]</b><br>";

    /* Dizinin içeriğinin foreach döngüsü ile yazdırılması. */
    echo "<h4>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-1 </h4>";
    foreach ($dizi1 as $eleman) {//java ile aynı
        echo "$eleman <br>";///br alt alta yazılsın diye
    }

    echo "<h4>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2 </h4>";
    foreach ($dizi1 as $anahtar => $deger) { //anahtar dizinin index numarasını,değer ise o index içindeki değeri temsil eder
        echo " $anahtar - $deger <br>";
    }

    /* Dizinin içeriğinin for döngüsü ile yazdırılması. */
    echo "<h4>Dizinin İçeriğinin For Döngüsü İle Yazdırılması-2 </h4>";
    for ($i = 0; $i < count($dizi1); $i++) {//count dizinin eleman sayısını verir
        echo "$i: $dizi1[$i] <br>";
    }


    $sayilar = array(1, 2, 3, 4, 5);
    echo "<h3> Dizi içine dizi yazdırılması</h3>";

    $sayilar = array(//diziler eleman olarak dizi alabilir
        array(1, 2, 3, 4, 5),
        array(10.5, 3.2, 1.7)
    );//Müzik uygulamanda dizi içinde dizi kullan,notalar ve isimler aynı dizi içinde olsun

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar[1][1] . "<br>";
    echo "Sayılar Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar[0][2] . "<br>";

    echo "<br>*****************************<br>";
    echo "<h3>Dizi elemanlarının keylerini değiştirme";

    $sayilar2 = array(//Biz normalde bir dizi elemanına erişmek için default olarak dizinin index numaraları ile erişirdik ama biz böyle değilde bellirli bri isim ile dizi elemanlarına erişmek istiyorsak aşağıda ki uygulamayı yapmamız lazım.
        "Integer"   => array(1, 2, 3, 4, 5),// => öperatörü ile bunu yaparız
        "Double"    => array(10.5, 3.2, 1.7)//biz bu elemanın keyine Double tanımlamasaydık otomatik olarak yine index nurmarası verilirdi ama index numarası 0 olur,0 ı başkası almamış zaten direk bu elemana verilir
    );

    echo "<pre>";
    print_r($sayilar2);
    echo "</pre>";

    echo "Sayılar2 Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar2["Integer"][1] . "<br>";
    echo "Sayılar2 Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar2["Double"][2] . "<br>";


    $bilgiler = array(
        "id"        => 1,
        "adi"       => "Ahmet",
        "soyadi"    => "Erimez",
        "gsm"       => "5343333333",
        "cinsiyet"  => "Erkek",
        "yas"       => 30
    );

    echo "$bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz.<br>";
    echo  $bilgiler["adi"] . " " . $bilgiler["soyadi"] . " Hoşgeldiniz.";

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    foreach ($bilgiler as $bilgi) {
        echo $bilgi . " - ";
    }
    echo "<br><br><br><br>";
    $bilgi = str_split($bilgiler["gsm"],3);
    foreach ($bilgi as $value) {
        echo $value . " ";
    }

    $kullanicilar = array(
        "kullanici1" => array(
            "id" => "1",
            "adi" => "Emre",
            "soyadi" =>"Kılcıoğlu",
            "gsm" =>"3434232323",
            "yas" => 32
        )

        );
    


    ?>









</body>

</html>