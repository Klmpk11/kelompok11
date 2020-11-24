<?php

//class buah
class buah{
  // menentukan property dengan private
  private $buah = "Apel";
  
  // method public
  public function tampilkan_nama(){
      return "Saya Membeli " .$this->buah;
  }
}
// memanggil method public tampilkan_nama dari class manusia
echo $buah->tampilkan_buah();

?>
