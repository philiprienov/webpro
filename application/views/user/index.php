    <div class="container-fluid">
        <div class="col">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
        <div class="card mb-3 ml-5" style="max-width: 640px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">

                </div>
                <div class="col-md-8">
                    <div class="card-body ">
                        <h5 class="card-title"> Nama : <?= $user['name']; ?></h5>
                        <p class="card-text"> Email : <?= $user['email']; ?></p>
                        <p class="card-text"> Alamat : <?= $user['alamat']; ?></p>
                        <p class="card-text"> Kota : <?= $user['kota']; ?></p>
                        <p class="card-text"><small class="text-muted">Dibuat tanggal <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>