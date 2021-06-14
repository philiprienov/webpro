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
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/astyle.css">

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('landing'); ?>">ApotekBersama</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?php echo base_url('landing'); ?>">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo base_url('landing/about'); ?>">About</a>
                    <a class="nav-item nav-link" href="<?php echo base_url('landing/contact'); ?>">Contact</a>
                    <a class="nav-item btn btn-primary tombol" href="<?php echo base_url('auth'); ?>">Join Us</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Akhir Navbar -->


    <!-- About Us -->
    <section id="about">
        <div class="container my-3 py-5 text-center">
            <div class="row mb-5">
                <div class="col">
                    <h1>About Us</h1>
                    <p class="mt-3">Dalam proses perancangan, pembuatan, dan pengembangan website ApotekBersama dilakukan oleh beberapa developer diantaranya yaitu sebagai berikut.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url('assets/img/landing/'); ?>elqi.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Elqi Ashok</h3>
                            <h5>1301184158</h5>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url('assets/img/landing/'); ?>arya.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Fitriono Arya Riski</h3>
                            <h5>1301180387</h5>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url('assets/img/landing/'); ?>abi.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Anak Agung Sada A P</h3>
                            <h5>1301183440</h5>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url('assets/img/landing/'); ?>philip.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Philip Wanderrienov</h3>
                            <h5>1301180170</h5>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="<?php echo base_url('assets/img/landing/'); ?>oji.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Fauzi Maulana N</h3>
                            <h5>1301180269</h5>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir About Us -->



    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>@Copyright 2020 | build by Elqi Ashok</p>
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