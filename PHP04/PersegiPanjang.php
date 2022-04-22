<?php
        class persegi_panjang{
            const lebar = 20 ;
            const panjang = 13 ;
            const tinggi = 17 ;

            function getKeliling(){
                return 2 * self :: lebar + self :: panjang ;
            }
            function getLuas(){
                return self :: lebar * self :: panjang ;
            }
            function getVolbalok(){
                return self :: panjang * self :: lebar * self :: tinggi ;
            }
        }

    $persegiPanjang1 = new persegi_panjang() ;

    echo "<br/>Luas Persegi Panjang = ". $persegiPanjang1 -> getLuas() ;
    echo "<br/>Keliling Persegi Panjang = ". $persegiPanjang1 -> getKeliling() ;
    echo "<br/>Volume Balok adalah = " . $persegiPanjang1 -> getVolbalok()  ;
?>