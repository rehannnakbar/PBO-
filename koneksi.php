<?php
class koneksi{
    function getKoneksi(){
     return $koneksi = new PDO("mysql:host=localhost;dbname=sekolah","root","");
    }
}
