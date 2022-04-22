<?php
class BMI {
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
    public function status_bmi($BMI) {
        if ($BMI < 18.5) {
            return "<td>Kekurangan Bobot</td>";
        }
        else if ($BMI >= 18.5 && $BMI <= 23.9) {
            return "<td>Sehat (Ideal)</td>";
        }
        else if ($BMI >= 24 && $BMI <= 26.9) {
            return "<td>Kelebihan Bobot</td>";
        }
        else if ($BMI >= 27 && $BMI <= 29.9) {
            return "<td>Obesitas 1</td>";
        }
        else if ($BMI < 30) {
            return "<td>Obesitas 2</td>";
        }
    }
  }
  if (isset($_GET['id'])) {
    $bmi = new BMI ;
    $bmi->_id = $_GET["id"] ;
    $bmi->_nama = $_GET["name"] ;
    $bmi->_tmptLahir = $_GET["temptLahir"] ;
    $bmi->_tglLahir = $_GET["taglLahir"] ;
    $bmi->_email = $_GET["mail"] ;
    $bmi->_gender = $_GET["gen"] ;
    $bmi->_berat = $_GET['beratBDN'] ;
    $bmi->_tinggi = $_GET['tinggiBDN'] ;
    $bmi->_periksa = $_GET['tglPriksa'] ;
  }
  $pasien1 = ['id'=>'P001','nama'=>'Indah Cahya', 'kelamin'=>'P', 'berat'=>50.2, 'tinggi'=>160];
  $pasien2 = ['id'=>'P002','nama'=>'Deo', 'kelamin'=>'L', 'berat'=>70, 'tinggi'=>158];
  $pasien3 = ['id'=>'P003','nama'=>'Hayate', 'kelamin'=>'L', 'berat'=>72, 'tinggi'=>173];
  $pasien4 = ['id'=> $bmi->_id,'nama'=> $bmi->_nama, 'kelamin'=> $bmi->_gender, 'berat'=>$bmi->_berat, 'tinggi'=>$bmi->_tinggi];

  $grup_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>