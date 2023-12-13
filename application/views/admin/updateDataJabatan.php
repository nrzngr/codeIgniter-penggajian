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
                <?php foreach ($jabatan as $j): ?>
                    <form action="<?= base_url('admin/dataJabatan/updateDataAksi') ?>" method="POST">

                        <div class="form-group input-primary">
                            <label>Nama Jabatan</label>
                            <input type="hidden" name="id_jabatan" class="form-control" value="<?= $j->id_jabatan ?>">
                            <input type="text" name="nama_jabatan" class="form-control" value="<?= $j->nama_jabatan ?>">
                            <?= form_error('nama_jabatan', '<div class="text-small text-danger"></div>') ?>

                        </div>

                        <div class="form-group input-primary">
                            <label>Gaji Pokok</label>
                            <input type="number" name="gaji_pokok" class="form-control" value="<?= $j->gaji_pokok ?>">
                            <?= form_error('gaji_pokok', '<div class="text-small text-danger"></div>') ?>

                        </div>

                        <div class="form-group input-primary">
                            <label>Tunjangan Transport</label>
                            <input type="number" name="tj_transport" class="form-control" value="<?= $j->tj_transport ?>">
                            <?= form_error('tj_transport', '<div class="text-small text-danger"></div>') ?>

                        </div>

                        <div class="form-group input-primary">
                            <label>Uang Makan</label>
                            <input type="number" name="uang_makan" class="form-control" value="<?= $j->uang_makan ?>">
                            <?= form_error('uang_makan', '<div class="text-small text-danger"></div>') ?>

                        </div>

                        <button type="submit" class="btn btn-success mt-3">Update</button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</div>