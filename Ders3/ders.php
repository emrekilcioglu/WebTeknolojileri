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
    $not=rand(10,100);
    if($not > 50){
        echo "Geçtiniz";

    }
    else{
        echo"Kaldınız";
    }
    echo "<h3> SIk kullanılan string fonksiyonlar </h3>";
    $yazi="Aydın Adnan Menderes Üniversitesi";
    echo "\$yazi Değişkeninin İçeriği: $yazi";// \ kaçış karakteridir aynı java gibi
    echo "<br> \$yazi Değişkeni Türü:" . gettype($yazi); // gettype() bize değişkenin türünün verir

    //İçeriğin Büyük Harfe Dönüştürülmesi 

    echo "<br> \$yazi Değişkeninin Büyük Harfle yazılması :". strtoupper($yazi); //Yazıları büyüğe çevirir str
    echo $yazi ;
    echo "<br> \$yazi Değişkeninin Büyük Harfle yazılması :". mb_strtoupper($yazi);//mb diyince türkçe karakter olan küçük ı  yı büyük yapar ama hala küçük i ler büyük I olur

    echo"<br> \$yazi Değişkeninin küçük  Harfle yazılması :". strtolower($yazi);
    echo "<br> \$yazi Değişkeninin küçük  Harfle yazılması :". mb_strtolower($yazi);//lower adı üstünde düşürüyor yine mb bazı türkçe karakterleri de küçültmesi için 

    //İçeriğin ilk harfinin BÜyük Harfe Dönüştürülmesi 
    echo "<br> \$yazi değişkenin İlk harfi büyük" . ucfirst($yazi);
    echo "<br> \$yazi değişkenin her kelimesinin  İlk harfi büyük" . ucwords($yazi);

    //İçeriğin Harf Sayısı:

    echo "<br> \$yazi değişkenin harf sayısı: ". strlen($yazi);
    echo "<br>";

    //Acıl Char Dönüşümü

    echo "Karakter Karşılığı (65) : " . chr(65);

    // 0-255 arasındaki değerleri chr fonksiyonuna sokarak satır satır yazdırınız

    function KelimeOrnegi(){
        for ($i=0; $i <255 ; $i++) { 
            echo chr($i);
            echo "<br>";
            
        }
    }
    KelimeOrnegi();

    //fonksiyon çalıştırmak için fonksiyonİSmi()


    //Metni Parçalanarak Diziye Dönüştürme

    $dizi=explode(" ",$yazi);
    echo "<pre>";
    print_r($dizi); //print_r içeriği gösterir
    echo "</pre>";//böyle html kodları kullanıla bilir

    //Uygulama: Metin İçerisindeki kelime ve cümle Sayısını alt alta yazdırınız 
    $metin="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta corporis saepe ipsa! Eligendi eos, ipsa vero molestias iusto nobis error obcaecati consequuntur sunt quis doloremque laboriosam vel delectus, beatae blanditiis! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, minima deserunt sit illum recusandae ratione eius veniam temporibus necessitatibus ullam aut maiores placeat? Culpa, delectus est iure unde hic dolorem!";

    $dizi2=explode(" ",$metin);//explode bizim ilk verdiğimiz karakteri ele alarak yazıyı böler,mesela biz burada boşluk olan yerlerden cümleyi bölüp dizi değişkeninin içine dizi olarak atarız
    $cumleDizisi=explode(".",$metin);

    echo "Kelime Sayısı: " . count($dizi2);
    echo "Cümle sayısı:" . count($cumleDizisi);

    //Uygulama Veri tabanında 2022-11-20 şeklinde gelen tarihi 20.11.2022 şeklinde yazdırın
    $tarih=" sdfs";

    echo "Tarih: $tarih";


    //Dizinin Metine Dönüştürülmesi (implode)

    echo "<br>";
    $aylarDizisi = array(
        "Ocak","Şubat","Mart","Nisan"
    );

    echo $aylarDizisi = implode("-",$aylarDizisi);//"-" diyerek elemanları bunla ayır diyoruz

    //str_split String parçalama işlemi yapar.

    $iban= "TR00000700606066006055";
    $yeniiban= str_split($iban,4);//4 er 4 er parçala dedik

    foreach ($yeniiban as $key ) {
        echo "$key ";
    }

    

    





    




    ?>
    
</body>
</html>