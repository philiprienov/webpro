<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <section>
                <table class="table table-hover" id="table_user">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">Email</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($list as $l) : ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $l['name']; ?></td>
                                <td><?php echo $l['email']; ?></td>
                                <td><?php echo $l['alamat']; ?></td>
                                <td><?php echo $l['kota']; ?></td>
                                <td>
                                    <?php if ($l['role_id'] == 1) {
                                        echo 'Admin';
                                    } elseif ($l['role_id'] == 2) {
                                        echo 'Apoteker';
                                    } else {
                                        echo 'Member';
                                    } ?>
                                </td>
                                <td>
                                    <a href="#" class="badge badge-success" data-toggle="modal" data-target="#roleModal<?php echo $l['id']; ?>">Edit</a>
                                    <a href="<?php echo base_url('admin/delete/' . $l['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="badge badge-danger">Delete</a>

                                    <!-- <?php echo anchor('admin/delete/' . $l['id'], '<div class="badge badge-danger">Delete</div>') ?> -->
                                </td>
                            </tr>
                            <div class="modal fade" id="roleModal<?php echo $l['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Change Role User</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo base_url('admin/updateRole'); ?>" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $l['id'] ?>">
                                                    <input type="text" class="form-control" id="role" name="role" placeholder="Input Role" value="<?php echo $l['role_id'] ?>">
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
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->