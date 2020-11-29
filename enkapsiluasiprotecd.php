<?php

//class buah
class buah{
  //menentukan property dengan protected   
  protected $nama = "Jeruk";
  
  //method protected
  protected function nama(){
    return "Saya adalah buah " .$this->nama;
  }
  
  public function tampilkan_nama(){
    return $this->tampilkan_nama;
  }
  
}
 
//instansiasi class buah
 $buah = new buah();
 
//memanggil method public tampilkan_nama dari class buah
 echo $buah->tampilkan_nama() ;
?>
