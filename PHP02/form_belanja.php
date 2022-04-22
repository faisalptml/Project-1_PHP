<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Belanja Online</title>
    <style>
      .container {
        margin: 0;
        padding: 0;
      }
      .ada {
        margin: -10px 20px 0px 0px;
        width: 370px;
        float: right;
      }
      @media screen and (max-width: 375px) {
        .forom {
          margin-top: 45px;
        }
      }
      @media screen and (max-width: 376px) {
       .ada{
         float: left;
         width: 370px;
         margin: 3px 10px 15px 10px;
       }
      }
    </style>
  </head>
  <body>
    <h3 class="mt-2">Belanja Online</h3>
    <hr/>

<div>
  <ul class=" ada list-group">
    <li class="list-group-item active">Daftar Harga</li>
    <li class="list-group-item">TV : 4.200.000</li>
    <li class="list-group-item">Kulkas : 3.100.000</li>
    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
  </ul>
</div>
 
  <form class="forom" method = "POST"action = "form_belanja.php" >
  <div class="form-group row ml-2">
    <label for="text" class="col-2 col-form-label">Customer</label> 
    <div class="col-3">
      <input id="text" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" value = "">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 ml-4">Pilih Produk</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline"> 
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row ml-2">
    <label for="text1" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="text1" name="jumlah_beli" placeholder="Jumlah" type="text" class="form-control" value = "">
    </div>
  </div> 
  <div class="form-group row">
    <div style = "margin-left: 230px;">
    <input type="submit" value = "proses" name = "simpan" class = "btn btn-success">
    </div>
  </div>
</form>

<div style = "margin-left: 25px;">
<?php
    $_nama = $_POST['costumer'] ;
    $_produk = $_POST['produk'] ;
    $_jumlah = $_POST['jumlah_beli'] ; 
    $_simpan = $_POST['proses'] ;
    
    echo '<br/> Nama Costumer : ' . $_nama ;
    echo '<br/> Produk Pilihan : ' . $_produk ;
    echo '<br/> Jumlah Beli : ' . $_jumlah ;

    if ($_produk == "TV") {
      echo '<br/>Total Harga : Rp.' . number_format($_jumlah*4200000,0 , ' , ' , '.') . ',-' ;
    } 
    elseif ($_produk == 'Kulkas') {
      echo '<br/>Total Harga : Rp.' . number_format($_jumlah*3100000,0 , ' , ' , '.') . ',-' ;
    }
    elseif ($_produk == "Mesin Cuci") {
      echo '<br/>Total Harga : Rp.'. number_format($_jumlah*3800000,0 , ' , ' , '.') . ',-' ;
    }
?>
</div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>