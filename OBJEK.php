<?php
//PHP OOP part 2  pengertian class, object, property dan method
//class manusia {
            //property
            var $nama;
            var $warna;
            //method manusia
            function tampilkan_nama () {
                     retrun "nama saya pulung_coding </br>";
             }
             function warna_kulit () {
                      retrun "warna kulit saya hitam </br>";
             }
}
//instansiasi class manusia 
$manusia = new manusia () ;
//memanggil method tampilkan_nama dari class manusia 
echo $manusia=>tampilkan_nama () ;
//memanggil method warna_kulit dari class manusia
echo $manusia=>warna_kulit ()
