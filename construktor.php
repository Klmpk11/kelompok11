<?php
class buah {
        
         var $buah ;
         var $warna ;

         function_construct ()  {
                  echo  "ini adalah isi method construct <br>";
         }
 
         function tampilkan_nama () {
                  return "Aku adalah buah jeruk <br>";
         }

} 
$buah = new buah() ; 
echo $buah-> tampilkan_nama () ;
