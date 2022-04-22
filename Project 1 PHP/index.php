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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <style>
            @media screen and (max-width: 375px) {
                form {
                    background-color: #ffc500;
                }
            }
        </style>
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
                            <a class="nav-link active" href="index.php">
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
                    <div class="copyright">
                        &copy; 2022 <strong><span>Paisal Patmal</span></strong>.<br> All Rights Reserved
                    </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <div class="container" style="margin-bottom: -300px">
                <h2 class = 'text-center mt-3'>Form Body Mass Index (BMI)</h2>
                <hr/>
                <form method="GET" action="hasilAkhir.php">
                <div class="form-group row">
                    <label for="id" class="col-4 col-form-label">Kode Pasien</label> 
                    <div class="col-8">
                    <input id="id" name="id" placeholder="Kode Pasien" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama Pasien</label> 
                    <div class="col-8">
                    <input id="name" name="name" placeholder="Nama Pasien" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="temptLahir" class="col-4 col-form-label">Tempat Lahir</label> 
                    <div class="col-8">
                    <input id="temptLahir" name="temptLahir" placeholder="Tempat Lahir Pasien" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="taglLahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                    <div class="col-8">
                    <input id="taglLahir" name="taglLahir" placeholder="dd/mm/yyyy" type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mail" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <input id="mail" name="mail" placeholder="Masukan Email" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Gender</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gen" id="gen_0" type="radio" class="custom-control-input" value="L"> 
                        <label for="gen_0" class="custom-control-label">Laki - laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gen" id="gen_1" type="radio" class="custom-control-input" value="P"> 
                        <label for="gen_1" class="custom-control-label">Perempuan</label>
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="beratBDN" class="col-4 col-form-label">Berat Badan</label> 
                    <div class="col-8">
                    <input id="beratBDN" name="beratBDN" placeholder="Masukan Berat Badan" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggiBDN" class="col-4 col-form-label">Tinggi Badan</label> 
                    <div class="col-8">
                    <input id="tinggiBDN" name="tinggiBDN" placeholder="Masukan Tinggi Badan" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tglPriksa" class="col-4 col-form-label">Tanggal Periksa</label> 
                    <div class="col-8">
                    <input id="tglPriksa" name="tglPriksa" placeholder="yyyy/mm/dd" type="date" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary" name="proses">Submit</button>
                    </div>
                </div>
                </form>
                </div>
                </div>
            </div>

            <div id="layoutSidenav_content">
                <div class="container-fluid mt-3">
                    <?php
                        include_once 'BMIpasien.php';
                    ?>
                </div>
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