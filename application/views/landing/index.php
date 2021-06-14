<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css'); ?>style_landing.css"> -->

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('landing'); ?>"><?= $title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= base_url('landing'); ?>">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= base_url('landing/about'); ?>">About</a>
                    <a class="nav-item nav-link" href="<?php echo base_url('landing/contact'); ?>">Contact</a>
                    <a class="nav-item btn btn-primary tombol" href="<?php echo base_url('auth'); ?>">Join Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Make buying medicines<span> faster </span> <br> and <span> better</span> with us</h1>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">

        <!-- Info Panel -->
        <div class="row justify-content-center">
            <div class="col-6 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="<?php echo base_url('assets/img/landing/'); ?>employee.png" alt="24jam" class="float-left">
                        <h4>24 Jam</h4>
                        <p>ApotekBersama tersedia dalam 24 jam.</p>
                    </div>

                    <div class="col-lg">
                        <img src="<?php echo base_url('assets/img/landing/'); ?>security.png" alt="security" class="float-left">
                        <h4>Security</h4>
                        <p>Kualitas obat terbaik, terpercaya, dan aman.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir info panel -->


        <!-- Online pharmacy -->
        <div class="row onlinepharmacy">
            <div class="col-lg-6">
                <img src="<?php echo base_url('assets/img/landing/'); ?>online-pharmacy.jpg" alt="onlinepharmacy" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3><span> Buy</span> medicine more <span>easily</span></h3>
                <p>Lakukan pengalaman pembelian obat dengan mudah, cepat, dan aman setiap harinya.</p>
            </div>
        </div>
        <!-- Akhir online pharmacy -->

        <!-- Testimoni -->
        <section class="testimonial">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>"Proses mudah, aman, dan cepat. Kualitas obat sangat bagus. Terimakasih! "</h5>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6 justify-content-center d-flex">
                    <figure class="figure">
                        <img src="<?php echo base_url('assets/img/landing/'); ?>testi2.jpeg" class="figure-img img-fluid rounded-circle" alt="testi">
                        <figcaption class="figure-caption">
                            <h5>Zoko D</h5>
                            <p>Designer</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!-- Akhir Testimoni -->

    </div>
    <!-- Akhir container -->




    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>@Copyright 2020</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>