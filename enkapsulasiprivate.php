<?php

//class buah
class buah{
  // menentukan property dengan private
  private $nama = "Apel";
  
  // method public
  public function tampilkan_nama(){
      return "Saya Membeli " .$this->nama;
  }
}
//instansiasi class buah
$buah = new buah();

// memanggil method public tampilkan_nama dari class buah
echo $buah->tampilkan_nama();

?>
