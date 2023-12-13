<div class="content-body">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>

        <div class="card" style="width: 60%; margin-bottom: 100px;">
            <div class="card-body">

                <form action="<?= base_url('admin/dataJabatan/tambahDataAksi') ?>" method="POST">

                    <div class="form-group input-primary">
                        <label>Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control">
                        <?= form_error('nama_jabatan', '<div class="text-small text-danger"></div>') ?>

                    </div>

                    <div class="form-group input-primary">
                        <label>Gaji Pokok</label>
                        <input type="text" name="gaji_pokok" class="form-control">
                        <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>

                    </div>

                    <div class="form-group input-primary">
                        <label>Tunjangan Transport</label>
                        <input type="text" name="tj_transport" class="form-control">
                        <?= form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>

                    </div>

                    <div class="form-group input-primary">
                        <label>Uang Makan</label>
                        <input type="text" name="uang_makan" class="form-control">
                        <?= form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>

                    </div>

                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>

            </div>
        </div>


    </div>
</div>