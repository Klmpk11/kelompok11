<?php
//class buah
class buah {
         //property
         var $buah ;
         var $warna ;

         function _construct ()  {
                  echo  "ini adalah isi method construct </br>";
         }

         //method buah 
         function tampilkan_buah() {
                  return "Aku adalah buah jeruk </br>";
         }

}
//instansiasi class buah 
$buah = new buah() ; 

//memanggil method tampilkan nama dari class buah 
echo $buah -> tampilkan_buah () ;
