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


            <button type="button" href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newObatModal"> Input Obat</button>

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
                                            <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editStokModal<?php echo $o['id']; ?>">Edit</a>
                                            <a href="<?php echo base_url('apoteker/delete/' . $o['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="badge badge-danger">Delete</a>
                                            <a href="#" class="badge badge-info" data-toggle="modal" data-target="#viewModal<?php echo $o['id']; ?>">View</a>

                                        </td>
                                    </tr>

                                    <!-- Edit stok Modal -->
                                    <div class="modal fade" id="editStokModal<?php echo $o['id']; ?>" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Input Stok Obat</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo base_url('apoteker/updateStok'); ?>" method="POST">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $o['id']; ?>">
                                                            <input type="text" class="form-control" id="eStok" name="eStok" placeholder="Masukkan Jumlah Stok Obat" value="<?php echo $o['stok']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="viewModal<?php echo $o['id']; ?>" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel">Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo base_url('apoteker/viewObat'); ?>" method="POST">
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

        <!--Input Obat Modal -->
        <div class="modal fade" id="newObatModal" tabindex="-1" role="dialog" aria-labelledby="newObatModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newObatModalLabel">Input Obat</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('apoteker/inputObat'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukkan Nama Obat">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Jumlah Stok Obat">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Obat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- Edit Stok Modal -->