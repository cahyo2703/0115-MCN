<?php
//class mobil
Class Mobil{
public $nama;
public $merk;
public $a;

function getInfo(){
echo "Nama mobil: ".$this->nama."<br/>";
echo "Merk: ".$this->merk."<br/>";
echo "Tahun:".$this->a."<br/>";
}
}
//bagian main
$ferari=new Mobil();
$ferari->nama="xxx";
$ferari->merk="aaa";
$ferari->a="2022";
$ferari->getInfo();
?>

Kesimpulannya Overload adalah method yang berisi beberapa method dengan nama yang sama namun dengan parameter yang berbeda