<?php
 class buah{
   
   var $buah; 
   var $warna; 
 
   function __construct(){
     echo "ini adalah isi method construct </br>";
     }
  
   function __destruct(){
     echo "ini adalah isi method destruct </br>"; 
     
   }
 
   function tampilkan_nama(){
     return " Saya Adalah Buah Anggur </br> "; 
   }
   
   }

   $buah = new buah (); 
   echo $buah->tampilkan_nama();

   ?>
