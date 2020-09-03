<?php 
    class Produk {
        // property adalah representasi data dari sebuah object atau
        // variabel dalam object
        // ditambah visibility didepanya

        // method adalah representasi perilaku dari sebuah object atau
        // function dalam object
        // ditambah visibility di depanya


        // dibawah ini membuat property
        public  $harga = 0,
                $prosesor = "intel i7'10th Gen",
                $sistemOperasi = "Linux";

        // dibawah pembuatan method atau function dalam kelas
        public function getLabel() {
            // $this digunakan untuk ngambil property dluar function tapi msaih didalam
            // class yang sama,kalo ngga ada $this nanti membuat variabel baru didalam 
            // function itu sendiri
            return "$this->harga,
                    $this->prosesor,
                    $this->sistemOperasi";
        }
    }
    // dibawah pemanggilan property
    $laptop = new Produk();
    $laptop->harga = 1000000;
    $laptop->prosesor ="AMD Ryzen 5 3th Gen";
    $laptop->sistemOperasi;
    

    $komputer = new Produk();
    $komputer->harga = 12000000;
    $komputer->prosesor = "Intel i3 8th Gen";
    $komputer->sistemOperasi = "Windows 10" ;

    // dibwah pmaggilan method
    echo "Laptop dengan spesifikasi : " . $laptop->getLabel();
    echo "<br>";
    echo "komputer dengan spesifikasi : " . $komputer->getLabel();
?>