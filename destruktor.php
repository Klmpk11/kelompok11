<?php
 class buah {
   
   var $buah; 
   var $warna; 
 
   function_construct (){
     echo "ini adalah isi method construct </br>"
     }
  
   function_destruct (){
     echo "ini adalah isi method destruct </br>"; 
     
   }
 
   function tampilkan_buah (){
     return "Saya Adalah Buah Anggur </br> "; 
   }
   
   }

   $buah = new buah (); 
   echo $buah ">tampilkan_buah();

   ?>

