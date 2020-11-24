<?php
   class buah{
     procted $buah = "Jeruk";
     
     protected function buah() {
         return "Saya adalah buah " .$this->nama;
     }
     
     public function tampilkan_nama() {
         return $this->tampilkan_nama;
     }
   }
   
   $buah = new buah();
   echo $buah->tampilkan_nama();

 ?>
