<?php
include_once 'classBMI.php';

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
  $pasien1 = ['id'=>'P001','tglPriksa'=>'2022-03-21', 'nama'=>'Indah Cahya', 'kelamin'=>'P', 'berat'=>50.2, 'tinggi'=>160];
  $pasien2 = ['id'=>'P002','tglPriksa'=>'2022-03-21','nama'=>'Deo', 'kelamin'=>'L', 'berat'=>70, 'tinggi'=>158];
  $pasien3 = ['id'=>'P003','tglPriksa'=>'2022-03-23','nama'=>'Hayate', 'kelamin'=>'L', 'berat'=>72, 'tinggi'=>173];
  $pasien4 = ['id'=> $bmi->_id, 'tglPriksa'=>$bmi->_periksa, 'nama'=> $bmi->_nama, 'kelamin'=> $bmi->_gender, 'berat'=>$bmi->_berat, 'tinggi'=>$bmi->_tinggi];

  $grup_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Project 1 PHP</title>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Paisal Patmal Jaelani</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading"><h6>Home</h6></div>
                            <a class="nav-link active" href="Project 1 PHP/home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Project 1
                            </a>
                            <div class="sb-sidenav-menu-heading"><h6>Praktikum</h6></div>
                            <a class="nav-link" href="Praktikum_1.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 1
                            </a>
                            <a class="nav-link" href="form_belanja.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 2
                            </a>
                            <a class="nav-link" href="praktikum3.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 3
                            </a>
                            <a class="nav-link" href="PersegiPanjang.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 4
                            </a>
                            <a class="nav-link" href="class_dispenser.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 5
                            </a>
                            <a class="nav-link" href="praktikum_6.php">
                                <div class="sb-nav-link-icon mt-1"><i class="fas fa-arrow-right"></i></div>
                                Praktikum 6
                            </a>
                        </div>
                           
                        <div class="sb-sidenav-footer" style="margin-top: 137px;">
                    <footer>
                    <div class="copyright">
                        &copy; 2022 <strong><span>Paisal Patmal</span></strong>.<br> All Rights Reserved
                    </div>
                    </footer>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <div class="container-fluid mt-3">
                <h2 class="text-center mb-5">Data BMI Pasien</h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Pasien</th>
                    <th scope="col">Tanggal Periksa</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Berat (kg)</th>
                    <th scope="col">Tinggi (cm)</th>
                    <th scope="col">Nilai BMI</th>
                    <th scope="col">Status BMI</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    $nomor = 1;
                    foreach($grup_pasien as $pasien) {
                        echo '<tr><td>'.$nomor.'</td>';
                        echo '<td>'.$pasien['id'].'</td>';
                        echo '<td>'.$pasien['tglPriksa'].'</td>' ;
                        echo '<td>'.$pasien['nama'].'</td>';
                        echo '<td>'.$pasien['kelamin'].'</td>';
                        echo '<td>'.$pasien['berat'].'</td>';
                        echo '<td>'.$pasien['tinggi'].'</td>';
                        $BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
                        echo '<td>'.number_format($BMI,1).'</td>';
                        $status = new BMI();
                        echo $status->status_bmi($BMI);
                        echo '</tr>';
                        $nomor++;
                    }
                ?>
            </tbody>
        </table>
                </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>