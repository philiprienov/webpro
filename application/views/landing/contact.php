<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/'); ?>cstyle.css">

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


    <!-- Form Contact Us -->
    <!-- contact section -->
    <section id="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Kirim email kepada kami dan dapatkan berita terbaru dari kami.</p>
            <div class="contact-form">

                <!-- Grid pertama -->
                <div>
                    <i class="fa fa-map-marker"></i><span class="form-info"> Jl. Terusan Buah Batu, Bandung</span><br>
                    <i class="fa fa-phone"> </i><span class="form-info"> Nomor Telepon (0231) 8883630</span><br>
                    <i class="fa fa-envelope"></i><span class="form-info"> ApotekBersama24@Gmail.com</span>
                </div>

                <!-- grid kedua -->
                <div>
                    <form>
                        <input type="text" placeholder="Nama depan" required>
                        <input type="text" placeholder="Nama belakang" required><br>
                        <input type="email" placeholder="Email" required><br>
                        <input type="text" placeholder="Subjek pesan" required><br>
                        <textarea name="message" placeholder="Pesan" rows="5" required></textarea><br>
                        <button class="submit">Kirim pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Contact section -->
    <!-- Akhir Form Contact Us -->

    <!-- Footer -->
    <footer class="footer bg-light text-black">
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