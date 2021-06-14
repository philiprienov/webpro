<div class="container-fluid">
    <div class="col">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?php echo base_url('apoteker/changePassword'); ?>" method="POST">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <small class="text-danger"><?= form_error('current_password'); ?></small>
                </div>
                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password">
                    <small class="text-danger"><?= form_error('new_password'); ?></small>

                </div>
                <div class="form-group">
                    <label for="new_password2">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                    <small class="text-danger"><?= form_error('confirm_password'); ?></small>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Change Password</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>