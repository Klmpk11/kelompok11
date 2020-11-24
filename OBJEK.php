<?php
//PHP OOP part 2  pengertian class, object, property dan method
//class hewan {
            //property
            var $hewan;
            var $kelamin;
            //method hewan
            function nama_hewan () {
                     retrun "Saya adalah seekor singa </br>";
             }
             function jenis_kelamin () {
                      retrun "Saya seekor singa jantan  </br>";
             }
}
//instansiasi class hewan 
$hewan = new hewan () ;
//memanggil method nama_hewan dari class hewan 
echo $hewan=>nama_hewan () ;
//memanggil method jenis_kelamin dari class manusia
echo $hewan=>jenis_kelamin ()
