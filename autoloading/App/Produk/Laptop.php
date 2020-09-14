<?php 
 class Laptop extends Produk implements InfoProduk {
    public $penyimpanan;
    public function __construct($harga,$prosesor,$sistemOperasi,$penyimpanan) {
        //ditulis parent karena biar cepet ,jadi manggil fungsi __construct yang ada di class parent,bukan class child
        parent:: __construct($harga,$prosesor,$sistemOperasi);
        $this->penyimpanan = $penyimpanan;
    }
    public function getInfo() {
        $str = " (Rp.{$this->harga}) | {$this->getLabel()}";
        return $str;    
    }
    public function getLabelProduk() {
            $str = "Laptop : ".$this->getInfo()." - {$this->penyimpanan} yang tersedia";
            return $str;
    }
}