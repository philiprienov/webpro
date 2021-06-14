<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <div class="row">
                <div class="col-lg-8">
                    <section>
                        <table class="table table-hover" id="table_user">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">STOK</th>
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
                                                <form action="<?php echo base_url('admin/viewObat'); ?>" method="POST">
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