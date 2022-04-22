<div class="col-6">
    <?php
        class bmiPasien {
            public $_id ;
            public $_nama ;
            public $_tmptLahir ;
            public $_tglLahir ;
            public $_berat ;
            public $_tinggi ;
            public $_email ;
            public $_gender ;
            public $_tglpriksa ;

            public function hasilFORM() {
                return "Id Pasien : $this->_id <br>
                            Nama : $this->_nama <br>
                            Tempat Lahir : $this->_tmptLahir <br>
                            Tanggal Lahir : $this->_tglLahir <br>
                            Email : $this->_email <br>
                            Gender : $this->_gender<br> 
                            Berat Badan : $this->_berat <br>                 
                            Tinggi Badan : $this->_tinggi <br>
                            Tanggal Periksa : $this->_tglpriksa <br>" ; 
            }

            public function status_bmi(){

            }
        }
        if (isset($_GET['id'])) {
            $bmi = new bmiPasien ;
            $bmi->_id = $_GET["id"] ;
            $bmi->_nama = $_GET["name"] ;
            $bmi->_tmptLahir = $_GET["temptLahir"] ;
            $bmi->_tglLahir = $_GET["taglLahir"] ;
            $bmi->_email = $_GET["mail"] ;
            $bmi->_gender = $_GET["gen"] ;
            $bmi->_berat = $_GET['beratBDN'] ;
            $bmi->_tinggi = $_GET['tinggiBDN'] ;
            $bmi->_periksa = $_GET['tglPriksa'] ;
            echo $bmi->hasilFORM() ;
        }
    ?>
</div>
</body>
</html>