<?php
   //class buah
   class buah{
     //menentukan property dengan procted
     procted $buah = "Jeruk";
     
     //method protected
     protected funtion buah() {
         return "Saya adalah buah " .$this->nama;
     }
     
     public function tampilkan_buah() {
         return $this->tampilkan_buah;
     }
   }
   
   //instansiasi class buah
   $buah = new buah();
   
   //memanggil method public tampilkan_nama dari class buah
   echo $buah->tampilkan_buah();

 ?>
