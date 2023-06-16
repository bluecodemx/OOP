<?php
class Person{
    var string $name = "Masukan Nama Anda";
    var string $address = "Masukan Alamat Anda";
    var string $country = "Masukan Negara Anda";

    function sayhello (string $name){
        echo "Hello $name" .PHP_EOL;
    }
}