<?php
   //php 7.3.0
   echo "Hello, Dcoder! "

 ?>
 //class manusia 
 class manusia (
   //property 
   var $nama; 
   var $warna; 
   //method construct dijalankan pertama kali
   function ___ construct (){
     echo "ini adalah isi method construct </br>"
     }
   //method destruct dijalankan terakhir
   function ___ destruct (){
     echo"ini adalah isi method destruct </br>"; 
     
   }
   //method manusia 
   function tampilkan nama (){
     return "nama saya pulung_koding </br> "; 
   }
   
   }
   //instansiasi class manusia 
   $manusia = new manusia (); 
   //memanggil method tampilkan_nama dari class manusia 
   echo $manusia ">tampilkan_nama();
