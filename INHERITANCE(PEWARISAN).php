<?php

// class buah
class buah{
  
  // property class buah
  public $nama_buah;
  
  // method pada class buah
  function berinama($buah) {
      $this->nama_buah=$buah;
  }
}

// class turunan atau sub class dari class buah
// kita menghubungkan class dengan syntax extends
class warna extends buah{
  
    //property class warna
    public $jenis_warna;
    
    // method pada class warna
    function beriwarna($warna){
        $this->jenis_warna=$warna;
    }
}

// instansiasi class warna
$warnabuah = new buah;

// method jenis warna adalah method pada class buah, tapi kita bisa
$warnabuah->jeniswarna(" Merah ");
$warnabuah->jeniswarnaa(" Hijau ");

// menampilkan isi property
echo "Apel berwarna : " . $warnabuah->nama_buah . "</br>";
echo "Alpukat berwarna : " . $warnabuah->jenis_warna;

?>
