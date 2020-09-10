<?php
    class Produk {
        public  $harga = 0,
                $prosesor = "intel i7'10th Gen",
                $sistemOperasi = "Linux",
                $penyimpanan = 0,
                $port = 0;
                $port = 0;
                
        // dibawah ini adalah kosnturktor istimewa
        public function __construct($harga,$prosesor,$sistemOperasi,$penyimpanan,$port){
            // jadi knp dikasi $this karena paameter di kosntruktor itu kn variabel lokal,biar nilainya
            // sama kayak yg di variabel atau property class,maka dikasi $this->harga
            $this->harga = $harga;
            $this->prosesor = $prosesor;
            $this->sistemOperasi = $sistemOperasi;
            $this->penyimpanan = $penyimpanan;
            $this->port = $port;
        }
        // ini contoh dari method 
        public function getLabel() {         
            return "
                    $this->prosesor,
                    $this->sistemOperasi";
        }
        // untuk manggil informasi lengkap dari sebuah object
        public function getLabelProduk () {
            // laptop akan tampil -> harga,processor dan sistem operasi serta ada tambahan berupa jenis penyimpanan
            $str = " (Rp.{$this->harga}) | {$this->getLabel()}";
            return $str;    
        }
    }

    // membuat class extends atau class yang berturunan dari kelas lain
    class Laptop extends Produk {
            public function getLabelProduk() {
                $str = "Laptop : (Rp.{$this->harga}) | {$this->getLabel()} - {$this->penyimpanan} yang tersedia";
                return $str;
            }

    }

    class Komputer extends Produk {
        public function getLabelProduk() {
            $str = "Komputer : (Rp.{$this->harga}) | {$this->getLabel()} - {$this->port} yang ada.";
            return $str;
        }
    }

// dibawah ini pembuatan kelas baru dalam satu file
    class cetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "(Rp.{$produk->harga}){$produk->getLabel()}";
            return $str;    
        }
    }
    // dibawah pemanggilan property di ubah ,jadi tinggal masukin nilainya dan akan dikirim ke function __construct
    // ada tambahan dua parameter karena ada tambahan propertyh di bagian class,dan karena ada dua pemanggila property
    // maka yang satu akan di isi 0 ,karena sesuai dengan permintaan yang ada di bawah 
    $laptop = new Laptop(10000000,"AMD ryzen 53th Gen","Linux","SSD",0);
    $komputer = new Komputer(12000000,"Intel i3 8th Gen","Windows 10",0,"6");

    // sampel problem dari sifat inheritence ada di bawah ini
    // laptop akan tampil -> harga,processor dan sistem operasi serta ada tambahan berupa jenis penyimpanan
    // kompueter akan tampil -> harga,processor dan sistem operasi serta ada tambahan berupa jumlah slot  I/O

    // dibawah ini akan ada pemanggilan
    echo $laptop->getLabelProduk();
    echo "<br>";
    echo $komputer->getLabelProduk();

?>