<?php

class Dispenser{
  protected $volume ;
  protected $hargaSegelas ;
  private $volumeGelas ;
  public $namaMinuman ;
  
  function  isi($vol){
    $this->volume = $vol ;
  }
}

    class  Minuman extends Dispenser {
        public $uang ;
        function __construct($uang, $namaMinuman, $volumeGelas, $harga){
            $this->uang = $uang ;
            $this->namaMinuman = $namaMinuman ;
            $this->hargaSegelas = $harga ;
            $this->volumeGelas = $volumeGelas ;
            }
        
            function transaksi($uang){
                $this->uang = $uang ;
                return  $this->uang - $this->hargaSegelas ;
            }
        
            function volumediAmbil(){
                $this->volume = $this->volume - $this->volumeGelas ;
                return $this->volume ;
            }
        
                function cetak(){
                    echo 'Nama Minuman : ' . $this->namaMinuman ;
                    echo '<br>Jumlah Uang : ' . $this->uang ;
                    echo '<br>Volume Dispenser : ' . $this->volume . 'ml' ;
                    echo '<br>Harga  Segelas Minuman : ' . $this->hargaSegelas ;
                    echo '<br>Volume Dispenser setelah mengambil Minuman : ' . $this->volumediAmbil() . 'ml' ;
                    echo '<br>Sisa uang : ' . $this->transaksi($this->uang);
                }
    }

    $minuman = new Minuman(20000, 'Coffee Latte', 250,13500);
    $minuman->transaksi($minuman->uang);
    $minuman->isi(1000);
    $minuman->cetak();
?>