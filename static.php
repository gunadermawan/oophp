<?php 
// static merupakan bagian dari class,jadi mengaksesnya lewat class
// nilai dari static akan selalu tetap,meskipun di instansiasi berulang kali
// membuat kode kayaknya prosedural
// biasa digunakan untuk fungsi bantuan/helper
// untuk mencetak diluar method static,gunakan namaKelas::namaMethod()
// untuk mencetak didalam method ,gunakan self::namaProperty
    class ContohStatic {
        public static $keyword = 1;
        public static function keyStatic () {
            return "hai ". self::$keyword++ ." kali.";
        }
    }
    echo ContohStatic::$keyword;
    echo "<hr>";
    echo ContohStatic::keyStatic();
    echo "<br>";
    echo ContohStatic::keyStatic();
    
?>