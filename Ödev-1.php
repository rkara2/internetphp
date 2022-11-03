<?php

/*
Uygulama-1


1. Kendi belirlediğimiz isimle bir sınıf oluşturunuz
2.comstract metodunda 3 tane değişken alarak değişkenleri sınıf içerisndeki değişkenlere atayınız
3. sınıf içerisnde public 2 tane metot yazınız
4. birinci metotta  girilen sayının karesi ekrana yazdırılsın
5. ikinci metotta   girilen sayıya kadar  sayıların  karesi alt alta  ekrana yazdırılsın

*/

class Ödev
{      
    public function __construct( $adım, $soyadım, $no)
    {
        $connection = " $adım, $soyadım, $no";
        return $connection;
    }

    public $adım = "Ramazan";
    public $soyadım = "Kara";
    public $no =216001057;

    
    public function write()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="9 Sayısının Karesi:".karesi(9);
        echo "<br>";
        echo $sonuc;
        
    }

    public function Sayılar($sayilar){
        for ($i=0; $i < $sayilar; $i++) { 
            echo $i*$i;
            echo "<br>";
        }
    }
}
$nesne = new Ödev("ramazankara.online", "ramazankara", "123", "rkara2");
print_r($nesne);
echo $nesne->write();
echo "<br>";
$nesne->Sayılar(5);
?>