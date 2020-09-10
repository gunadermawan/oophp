<?php
    class Produk {
        public  $harga = 0,
                $prosesor = "intel i7'10th Gen",
                $sistemOperasi = "Linux";
        // dibawah ini adalah kosnturktor istimewa
        public function __construct($harga,$prosesor,$sistemOperasi){
            // jadi knp dikasi $this karena paameter di kosntruktor itu kn variabel lokal,biar nilainya
            // sama kayak yg di variabel atau property class,maka dikasi $this->harga
            $this->harga = $harga;
            $this->prosesor = $prosesor;
            $this->sistemOperasi = $sistemOperasi;
        }
        public function getLabel() {         
                    return "
                    $this->prosesor,
                    $this->sistemOperasi";
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
    $laptop = new Produk(10000000,"AMD ryzen 53th Gen","Linux");
    $komputer = new Produk(12000000,"Intel i3 8th Gen","Windows 10");


    // dibwah pmaggilan method
    echo "Laptop dengan spesifikasi : ".$laptop->harga.$laptop->getLabel();
    echo "<br>";
    echo "komputer dengan spesifikasi : ".$komputer->harga.$komputer->getLabel();
    // mencetak info produk
    $infoProduk = new cetakInfoProduk();
    echo " <h3> Mencetak invoice dari produk</h3>";
    echo $infoProduk->cetak($laptop);
    echo "<br>";
    echo $infoProduk->cetak($komputer);
?>