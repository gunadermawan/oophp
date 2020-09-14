<?php
spl_autoload_register(function( $class ){
    // excplode untuk memecah stirng berdasrkan karakter tertentu,misal disini dipecah menggunakn backflash (\\)
    $class = explode('\\',$class);
    $class = end($class);
    require_once __DIR__.'/Produk/'.$class . '.php';
});

spl_autoload_register(function( $class ){
    $class = explode('\\',$class);
    $class = end($class);
    require_once __DIR__.'/Service/'.$class . '.php';
});