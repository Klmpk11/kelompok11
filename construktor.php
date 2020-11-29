<?php

   //class manusia
   class buah{
     //property
     var $nama;
     var $warna;
     
     function __construct(){
       echo "ini adalah isi method construct <br>";
       
       }
       
       //method buah
       function tampilkan_nama(){
       return " Saya adalah buah pir";
       
       }
      
      }
      //instansiasi class buah
      $buah = new buah ();
      
      //memanggil method tampilkan_nama dari class buah
      echo $buah->tampilkan_nama();
?>
