<?php
    class Produk {
        public  $harga = 0,
                $prosesor = "intel i7 10th Gen",
                $sistemOperasi = "Linux";
        // dibawah ini adalah kosnturktor
        public function __construct($harga,$prosesor,$sistemOperasi) {
            // jadi knp dikasi $this karena paameter di kosntruktor itu kn variabel lokal,biar nilainya
            // sama kayak yg di variabel atau property class,maka dikasi $this->harga
            $this->harga = $harga;
            $this->prosesor = $prosesor;
            $this->sistemOperasi = $sistemOperasi;
        }
        public function getLabel() {         
            return "$this->harga,
                    $this->prosesor,
                    $this->sistemOperasi";
        }
    }
    // dibawah pemanggilan property di ubah ,jadi tinggal masukin nilainya dan akan dikirimke function __construct
    $laptop = new Produk(1000000,"AMD ryzen 53th Gen","Linux");
    $komputer = new Produk(12000000,"Intel i3 8th Gen","Windows 10");
    // dibwah pmaggilan method
    echo "Laptop dengan spesifikasi : " . $laptop->getLabel();
    echo "<br>";
    echo "komputer dengan spesifikasi : " . $komputer->getLabel();
?>