<?php

// class buah
class buah{
  
  // property class buah
  public $buah_saya;
  
  // method pada class buah
  function berinama($saya) {
      $this->buah_saya=$saya;
  }
}

// class turunan atau sub class dari class buah
// kita menghubungkan class dengan syntax extends
class teman extends buah{
  
    //property class warna
    public $buah_teman;
    
    // method pada class buah teman
    function berinamateman($teman){
        $this->buah_teman=$teman;
    }
}

// instansiasi class buah teman
$buah = new teman;

// method buah teman adalah method pada class buah
$buah->berinama(" Buah Apel ");
$buah->berinamateman(" Buah Jeruk ");

// menampilkan isi property
echo "Buah Yang Saya Miliki Adalah : " .$buah->buah_saya . "<br/>" ;
echo " Buah Yang Teman Saya Miliki Adalah : " .$buah->buah_teman;

?>
