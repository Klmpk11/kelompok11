<?php
   //class manusia
   class manusia{
     //menentukan property dengan procted
     procted $nama = "Pulung Koding";
     
     //method protected
     protected funtion nama() {
         return "Nama saya " .$this->nama;
     }
     
     public function tampilkan_nama() {
         return $this->tampilkan_nama;
     }
   }
   
   //instansiasi class manusia
   $manusia = new manusia();
   
   //memanggil method public tampilkan_nama dari class manusia
   echo $manusia->tampilkan_nama();

 ?>
