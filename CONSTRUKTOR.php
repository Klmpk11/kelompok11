<?php
//class manusia
class manusia {
         //property
         var $nama ;
         var $warna ;

         function _construct ()  {
                  echo  "ini adalah isi method construct </br>";
         }

         //method manusia 
         function tampilkan_nama() {
                  return "nama saya pulung_coding </br>";
         }

}
//instansiasi class manusia 
$manusia = new manusia() ; 

//memanggil method tampilkan nama dari class manusia 
echo $manusia -> tampilkan_nama () ;
