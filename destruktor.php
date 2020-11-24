<?php
 //class buah
 class buah (
   //property 
   var $buah; 
   var $warna; 
   //method construct dijalankan pertama kali
   function_construct (){
     echo "ini adalah isi method construct </br>"
     }
   //method destruct dijalankan terakhir
   function_destruct (){
     echo "ini adalah isi method destruct </br>"; 
     
   }
   //method buah 
   function tampilkan_buah (){
     return "Saya Adalah Buah Anggur </br> "; 
   }
   
   }
   //instansiasi class buah 
   $buah = new buah (); 
   //memanggil method tampilkan_nama dari class buah
   echo $buah ">tampilkan_buah();
