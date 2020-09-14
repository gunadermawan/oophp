<?php 
// kontanta adalah identifire yang digunakan untuk menyimpan nilai,berbeda dengan variabel,nilai dari
// konstanta tidak dapat berubah seperti pada variabel atau property
// dibuat degan define(nama,value) dan cons USIA = value;
// NOTED -> define tidak disimpan didalam class,tetapi diluar sebagai konstanta glonbal
// NOTED -> const bisa disimpan didalam class
define ('NAMA','Guna dermawan');
const USIA = 20;
echo NAMA;
echo "<br>"; 
echo USIA;
echo "<br>";  
class Constanta {
    const NAMA = 'GUNA DERMAWAN';
}
// cara  pemanggilan
echo Constanta::NAMA;
// dibawah adalah spesial constant yang ada pada PHP
echo __CONST__;
?>
