<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Apotek <br> Bersama </div>

    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <?php if ($user['role_id'] == 1) {
            echo 'Admin';
        } else if ($user['role_id'] == 2) {
            echo 'Apoteker';
        } else {
            echo 'User';
        }   ?>
    </div>
    <!-- Nav Item - Dashboard -->

    <li class="nav-item active">
        <a href="<?php echo base_url(); ?>" class="nav-link">
            <div class="icon">
                <i class="fas fa-fw fa-home"></i>
                <span> Beranda </span>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <?php if ($user['role_id'] == 1) : ?>
            <a href="<?php echo base_url('admin/user_list'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Daftar User</span>
                </div>
            </a>
            <a href="<?php echo base_url('admin/daftarObat'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-tablets"></i>
                    <span>Daftar Obat</span>
                </div>
            </a>
            <hr class="sidebar-divider">
        <?php endif; ?>
    </li>
    <li class="nav-item">
        <?php if ($user['role_id'] == 2) : ?>
            <a href="<?php echo base_url('apoteker/inputObat'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-tablets"></i>
                    <span>Input Obat</span>
                </div>
            </a>
            <hr class="sidebar-divider">
        <?php elseif ($user['role_id'] == 3) : ?>
            <a href="<?php echo base_url('user/inputObat'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-tablets"></i>
                    <span>Beli Obat</span>
                </div>
            </a>
            <a href="<?php echo base_url('user/cartObat'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-shopping-bag"></i>
                    <span>Keranjang</span>
                </div>
            </a>
            <hr class="sidebar-divider">
        <?php endif; ?>
    </li>

    <li class="nav-item">
        <?php if ($user['role_id'] == 1) : ?>
            <a href="<?php echo base_url('admin'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user"></i>
                    <span> My Profile </span>
                </div>
            </a>
        <?php elseif ($user['role_id'] == 2) : ?>
            <a href="<?php echo base_url('apoteker'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user"></i>
                    <span> My Profile </span>
                </div>
            </a>
        <?php else : ?>
            <a href="<?php echo base_url('user'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user"></i>
                    <span> My Profile </span>
                </div>
            </a>
        <?php endif; ?>
    </li>
    <li class="nav-item">
        <?php if ($user['role_id'] == 1) : ?>
            <a href="<?php echo base_url('admin/edit'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span> Edit Profile </span>
                </div>
            </a>
        <?php elseif ($user['role_id'] == 2) : ?>
            <a href="<?php echo base_url('apoteker/edit'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span> Edit Profile </span>
                </div>
            </a>
        <?php else : ?>
            <a href="<?php echo base_url('user/edit'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span> Edit Profile </span>
                </div>
            </a>
        <?php endif; ?>
    </li>
    <li class="nav-item">
        <?php if ($user['role_id'] == 1) : ?>
            <a href="<?php echo base_url('admin/changePassword'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-key"></i>
                    <span> Change Password</span>
                </div>
            </a>
        <?php elseif ($user['role_id'] == 2) : ?>
            <a href="<?php echo base_url('apoteker/changePassword'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-key"></i>
                    <span> Change Password</span>
                </div>
            </a>
        <?php else : ?>
            <a href="<?php echo base_url('user/changePassword'); ?>" class="nav-link">
                <div class="icon">
                    <i class="fas fa-fw fa-key"></i>
                    <span> Change Password</span>
                </div>
            </a>
        <?php endif; ?>
    </li>

    <li class="nav-item">
        <!-- <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link"> -->
        <a class="nav-link" href="<?= base_url('auth/logout/'); ?>" data-toggle="modal" data-target="#logoutModal">

            <div class="icon">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span> Logout</span>

            </div>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
        <h6 class=" text-gray-600" align="center"><?= $user['name']; ?></h6>
    </li>

</ul>


<!-- Logout Modal-->
<div class="fade modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Apakah Anda Ingin Keluar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" Jika Anda Ingin Keluar.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout/'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>