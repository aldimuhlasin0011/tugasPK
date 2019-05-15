<?php
session_start();
/**
 * Jika Tidak login atau sudah login tapi bukan sebagai admin
 * maka akan dibawa kembali kehalaman login atau menuju halaman yang seharusnya.
 */
if (
  !isset($_SESSION['user_login']) || (isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member')
) {
  header('location:./../login.php');
  exit();
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Shop</title>
    <link rel="stylesheet" href="../assets/css1/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css1/style.css">
</head>

<body>

    <!-- Navbar -->
    <!-- <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-muted">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-muted">Tentang</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-muted">Kontak</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="./../logout.php" class="text-muted">Logout</a></li>
      </ol>
    </nav> -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #e3f2fd;">
        <!-- <div class="container-fluid"> -->
        <a class="navbar-brand" href="#">Online Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link page-scroll" href="#footer">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a href="../logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>
    <!-- Akhir  -->



    <!-- Konten -->


    <div class="container mb-5 text-center" style="margin-top: 20px;">
        <div class="row">
            <span class="text-muted">Hi <?= $_SESSION['nama']; ?></span>
            <div id="slider" class="carousel slide col-lg-12" data-ride="carousel" style="margin-bottom: 25px;">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/pictures/image/slider3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/pictures/image/slider1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/pictures/image/slider2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/pictures/image/slider4.jpg" class="d-block w-100">
                    </div>
                </div>
                <a href="#slider" rol="button" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#slider" rol="button" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header" style="border-top: 3px solid #007bff;">Kategori</div>
                    <div class="list-group-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Rumble</a>
                        <a href="#" class="list-group-item list-group-item-action">Distro Ori</a>
                        <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                        <a href="#" class="list-group-item list-group-item-action">Olahraga</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row mt-6">
                    <div class="col-lg-12 mb-4">
                        <div class="card" style="border-left: 4px solid #007bff;">
                            <div class="card-body">
                                <div class="d-flex text-uppercase font-weight-bold">
                                    <div class="mr-auto">Produk Terbaru</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <li><a href="#gambar"><img src="../assets/pictures/poto1.jpg" class="card-img-top"></a>


                                <!-- Overlay1 -->


                                <div class="overlay" id="gambar">
                                    <img src="../assets/pictures/image/poto3.jpg" alt="gambar">
                                    <button type="button" class="close" aria-label="Close">
                                        <a href="#"><span aria-hidden="true">&times;</span></a>
                                    </button>
                                    <nav aria-label="Page navigation example" style="margin-left: 43%;">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar5" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    1
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar1">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar2">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar4">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar5">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar1" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </li>

                            <!-- Akhir Overlay -->


                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="font-weight-bold">Bloods hitam</div>
                                    <div class="text-danger">Rp.175.000</div>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <li><a href="#gambar1"><img src="../assets/pictures/poto2.png" class="card-img-top"></a>

                                <!-- Overlay2 -->


                                <div class="overlay" id="gambar1">
                                    <img src="../assets/pictures/image/gambar3.jpg" alt="gambar">
                                    <button type="button" class="close" aria-label="Close">
                                        <a href="#"><span aria-hidden="true">&times;</span></a>
                                    </button>
                                    <nav aria-label="Page navigation example" id="nav1" style="margin-left: 43%;">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    2
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar2">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar4">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar5">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar2" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </li>

                            <!-- Akhir Overlay -->


                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="font-weight-bold">Celana dickies</div>
                                    <div class="text-danger">Rp.200.000</div>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <li><a href="#gambar2"><img src="../assets/pictures/poto3.jpg" class="card-img-top"></a>


                                <!-- Overlay3 -->


                                <div class="overlay" id="gambar2">
                                    <img src="../assets/pictures/image/gambar2.jpg" alt="gambar">
                                    <button type="button" class="close" aria-label="Close">
                                        <a href="#"><span aria-hidden="true">&times;</span></a>
                                    </button>
                                    <nav aria-label="Page navigation example" style="margin-left: 43%;">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar1" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar1">2</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    3
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar4">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar5">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar4" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </li>


                            <!-- Akhir Overlay -->


                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="font-weight-bold">Sepatu Vans Ori</div>
                                    <div class="text-danger">Rp.300.000</div>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <li><a href="#gambar4"><img src="../assets/pictures/poto4.jpg" class="card-img-top"></a>


                                <!-- Overlay4 -->


                                <div class="overlay" id="gambar4">
                                    <img src="../assets/pictures/image/gambar1.jpg" alt="gambar">
                                    <button type="button" class="close" aria-label="Close">
                                        <a href="#"><span aria-hidden="true">&times;</span></a>
                                    </button>
                                    <nav aria-label="Page navigation example" id="nav1" style="margin-left: 43%;">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar2" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar1">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar2">3</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    4
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar5">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar5" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </li>


                            <!-- Akhir Overlay -->


                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="font-weight-bold">Topi Snapback Quicksilver</div>
                                    <div class="text-danger">Rp.75.000</div>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <li><a href="#gambar5"><img src="../assets/pictures/poto5.png" class="card-img-top"></a>


                                <!-- Overlay5 -->


                                <div class="overlay" id="gambar5">
                                    <img src="../assets/pictures/image/gambar4.jpg" alt="gambar">
                                    <button type="button" class="close" aria-label="Close">
                                        <a href="#"><span aria-hidden="true">&times;</span></a>
                                    </button>
                                    <nav aria-label="Page navigation example" id="nav1" style="margin-left: 43%;">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar4" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#gambar">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar1">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar2">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#gambar4">4</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">
                                                    5
                                                    <span class="sr-only">(current)</span>
                                                </span>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#gambar" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </li>


                            <!-- Akhir Overlay -->


                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="font-weight-bold">Bandana Skull</div>
                                    <div class="text-danger">Rp.100.000</div>
                                </div>
                                <a href="#" class="btn btn-outline-primary btn-sm btn-block">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Akhir konten -->



    <!-- Footer -->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Kategori</h5>
                    <ul class="list-unstyledtext-small">
                        <li><a href="#" class="text-muted">Fashion</a></li>
                        <li><a href="#" class="text-muted">Elektronik</a></li>
                        <li><a href="#" class="text-muted">Komputer</a></li>
                        <li><a href="#" class="text-muted">Olahraga</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Tentang</h5>
                    <ul class="list-unstyledtext-small">
                        <li><a href="#" class="text-muted">Contact Us</a></li>
                        <li><a href="#" class="text-muted">Site Map</a></li>
                        <li><a href="#" class="text-muted">Privacy</a></li>
                        <li><a href="#" class="text-muted">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Akhir -->

    <script src="../assets/js1/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js1/bootstrap.min.js"></script>
    <script src="../assets/js/all.js"></script>
</body>

</html> 