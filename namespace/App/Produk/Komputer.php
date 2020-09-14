<?php 
class Komputer extends Produk implements InfoProduk {
    public $port;
    public function __construct($harga,$prosesor,$sistemOperasi,$port) {
        parent:: __construct ($harga,$prosesor,$sistemOperasi);
        $this->port = $port;
    }
    public function getInfo() {
        $str = " (Rp.{$this->harga}) | {$this->getLabel()}";
        return $str;    
    }
    public function getLabelProduk() {
        $str = "Komputer : ". $this->getInfo() ." - {$this->port} yang ada.";
        return $str;
    }
}