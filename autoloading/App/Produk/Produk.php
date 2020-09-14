<?php 

class Produk {
    protected
    $prosesor = "intel i7'10th Gen",
    $sistemOperasi = "Linux",
    $diskon = 0,
    $harga = 0;               
    // dibawah ini adalah kosnturktor istimewa
    public function __construct($harga,$prosesor,$sistemOperasi){
        // jadi knp dikasi $this karena parameter di kosntruktor itu kn variabel lokal,biar nilainya
        // sama kayak yg di variabel atau property class,maka dikasi $this->harga
        $this->harga = $harga;
        $this->prosesor = $prosesor;
        $this->sistemOperasi = $sistemOperasi;          
    }
    // ini contoh dari method 
    public function getLabel() {         
        return "
                $this->prosesor,
                $this->sistemOperasi";
    }
    // untuk manggil informasi lengkap dari sebuah object
    // dibawah adalah interface
    
    // dibawah ini contoh dari getter
    public function getProsesor() {
        return $this->prosesor;
    }
    public function getSistemOperasi() {
        return $this->sistemOperasi;
    }
    // dibawah ini contoh setter buat merubah isi dari property dari luar class
    public function setProsesor($prosesor) {
        return $this->prosesor = $prosesor;
    }
    public function setsistemOperasi($sistemOperasi) {
        return $this->sistemOperasi = $sistemOperasi;
    }
    public function diskon($diskon) {
        return $this->diskon = $diskon;
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon/100);
    }
}