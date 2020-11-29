<?php
//PHP OOP part 2  pengertian class, object, property dan method
class buah{
  //property
  var $nama;
  var $warna;
  
  //method buah
  function tampilkan_nama(){
    return "Saya adalah buah apel </br>";
       }
  function warna_buah(){
    return " Apel berwarna merah  </br>";
      }
}
//instansiasi class buah
$buah = new buah();
//memanggil method nama_buah dari class buah
echo $buah->tampilkan_nama();
//memanggil method warna_buah dari class buah
echo $buah->warna_buah();
?>
