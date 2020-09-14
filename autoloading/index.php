<?php 
    require_once 'App/init.php';
 $laptop = new Laptop(10000000,"AMD ryzen 53th Gen","Linux","SSD");
 $komputer = new Komputer(12000000,"Intel i3 8th Gen","Windows 10","6");

 $cetakProduk = new cetakInfoProduk();
 $cetakProduk->tambahProduk($laptop );
 $cetakProduk->tambahProduk($komputer );
 echo $cetakProduk->cetak();