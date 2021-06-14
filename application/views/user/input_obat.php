<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <button type="button" href="#" class="btn btn-primary width-10" data-toggle="modal" data-target="#beliObatModal">Beli</button>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <section>
                        <table class="table table-hover" id="table_user">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">STOK</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($obat as $o) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++; ?></th>
                                        <td><?php echo $o['nama_obat']; ?></td>
                                        <td><?php echo $o['stok']; ?></td>
                                        <td>
                                            <a href="#" class="badge badge-info" data-toggle="modal" data-target="#viewModal<?php echo $o['id']; ?>">View</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="viewModal<?php echo $o['id']; ?>" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel">Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo base_url('user/viewObat'); ?>" method="POST">
                                                    <div class="modal-body">
                                                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $o['id']; ?>">
                                                        <p><?php echo $o['deskripsi']; ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->

        <!-- beli Modal -->
        <div class="modal fade" id="beliObatModal" tabindex="-1" role="dialog" aria-labelledby="beliObatModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="beliObatModalLabel">Input Pembelian Obat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('user/inputObat'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="namaObat" name="namaObat" placeholder="Masukkan Nama Obat">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jumlahObat" name="jumlahObat" placeholder="Masukkan Jumlah Obat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Beli</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->