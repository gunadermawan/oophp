<!-- public-> berarti property bisa diakses oleh semua kelas tanpa kecuali -->
<!-- private-> berarti property hanya bisa diakses oleh kelas yang terdapat property itu dan turunanya -->
<!-- protected-> property hanya bisa diakses oleh kelas pemilik prooperty itu saja,turunanya tidak berlaku -->
<?php
// kelas utama
// kelas utama dibuat abstrak karena algoritma yang dipakai ngga menggunakan instansiasi dari kelas ini,jadi dibuat abstrak aja,yaa salah satu fungsinya biar bisa di
// instansiasi oleh kelas laintya ataun kelas child dari kelas produk ini
    abstract class Produk {
        private 
        $prosesor = "intel i7'10th Gen",
        $sistemOperasi = "Linux";
        protected $diskon = 0;
        private $harga = 0;               
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
        abstract public function getLabelProduk (); 
        public function getInfo() {
            // laptop akan tampil -> harga,processor dan sistem operasi serta ada tambahan berupa jenis penyimpanan
            // membuat method baru karena method diatas sudah menjadi abstarak
            $str = " (Rp.{$this->harga}) | {$this->getLabel()}";
            return $str;    
        }
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
    // kelas yang akan digunakan
    // membuat class extends atau class yang berturunan dari kelas lain
    // karena isi dari variabel $str sama aja antara class cild sama class parent nya,maka digunakan overriding atau gampangnya menimpa lah :)
    class Laptop extends Produk {
        public $penyimpanan;
        public function __construct($harga,$prosesor,$sistemOperasi,$penyimpanan) {
            //ditulis parent karena biar cepet ,jadi manggil fungsi __construct yang ada di class parent,bukan class child
            parent:: __construct($harga,$prosesor,$sistemOperasi);
            $this->penyimpanan = $penyimpanan;
        }
        public function getLabelProduk() {
                $str = "Laptop : ".$this->getInfo()." - {$this->penyimpanan} yang tersedia";
                return $str;
        }
    }

    class Komputer extends Produk {
        public $port;
        public function __construct($harga,$prosesor,$sistemOperasi,$port) {
            parent:: __construct ($harga,$prosesor,$sistemOperasi);
            $this->port = $port;
        }
        public function getLabelProduk() {
            $str = "Komputer : ". $this->getInfo() ." - {$this->port} yang ada.";
            return $str;
        }
    }

    class cetakInfoProduk {
        public $daftarProduk = array();
        public function tambahProduk( Produk $produk ){
            $this->daftarProduk[] = $produk;
        }
        public function cetak() {
            $str = "Daftar Produk : <br>";
                foreach( $this->daftarProduk as $p ){
                    $str .= "-{$p->getLabelProduk()}<br>";
                }
            return $str;    
        }
    }
    // dibawah pemanggilan property di ubah ,jadi tinggal masukin nilainya dan akan dikirim ke function __construct
    // ada tambahan dua parameter karena ada tambahan propertyh di bagian class,dan karena ada dua pemanggila property
    // maka yang satu akan di isi 0 ,karena sesuai dengan permintaan yang ada di bawah 
    $laptop = new Laptop(10000000,"AMD ryzen 53th Gen","Linux","SSD");
    $komputer = new Komputer(12000000,"Intel i3 8th Gen","Windows 10","6");

    $cetakProduk = new cetakInfoProduk();
    $cetakProduk->tambahProduk($laptop );
    $cetakProduk->tambahProduk($komputer );
    echo $cetakProduk->cetak();
?>