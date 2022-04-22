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
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading"><h6>Home</h6></div>
                            <a class="nav-link" href="index.php">
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
                            <a class="nav-link active" href="praktikum_6.php">
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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="daftar">Daftar Siswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>

        <div>
        <h1 class='text-center mb-4 mt-3'>Daftar Siswa</h1>

        <div class="container-fluid">
        <table class="table table-success table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Prodi</th>
            <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Fiony</td>
            <td>DKV</td>
            <td>90</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Gita</td>
            <td>SI</td>
            <td>76</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Reza</td>
            <td>TI</td>
            <td>75</td>
            </tr>
        </tbody>
        </table>
        </div>
        </div>
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