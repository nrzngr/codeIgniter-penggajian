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
                <form method="POST" action="<?php echo base_url('pegawai/gantiPassword/gantiPasswordAksi') ?>">

                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" name="passBaru" class="form-control mb-3">
                        <?php echo form_error('passBaru', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Ulangi Password Baru</label>
                        <input type="password" name="ulangPass" class="form-control">
                        <?php echo form_error('ulangPass', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan</button>

                </form>

            </div>
        </div>

    </div>
</div>