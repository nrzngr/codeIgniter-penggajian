<!-- Begin Page Content -->

<div class="content-body">
    <div class="container-fluid" id="content">

        <!-- Page Heading -->

        <div class="row page-titles col-lg-6 mt-3">
            <ol class="breadcrumb">

                <li class="breadcrumb-item active"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>
        <div class="card col-lg-6 align-bottom">


            <div class="card-body">
                <?= $this->session->flashdata('message'); ?>
                <form method="POST" action="<?php echo base_url('pegawai/gantiPassword') ?>">

                    <div class="form-group">
                        <label for="current_password">Password saat ini</label>
                        <input type="password" name="current_password" id="current_password" class="form-control mb-3">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <div class="form-group">
                        <label for="new_password1">Password Baru</label>
                        <input type="password" name="new_password1" id="new_password1" class="form-control mb-3">
                        <?php echo form_error('new_password1',  '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <div class="form-group">
                        <label for="new_password2">Ulangi Password Baru</label>
                        <input type="password" name="new_password2" id="new_password2" class="form-control">
                        <?php echo form_error('new_password2',  '<small class="text-danger pl-3">', '</small>') ?>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan</button>

                </form>

            </div>
        </div>

    </div>
</div>