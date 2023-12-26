<!-- Begin Page Content -->
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

                <form action="<?= base_url('admin/dataPegawai/tambahDataAksi') ?>" enctype="multipart/form-data"
                    method="POST">
                    <div class="form-group input-primary">
                        <label>NIK</label>
                        <input type="number" name="nik" class="form-control">
                        <?= form_error('nik', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control">
                        <?= form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                        <?= form_error('email', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                        <?= form_error('username', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <?= form_error('password', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Jabatan</label>
                        <select name="jabatan" class="form-control">
                            <option value="">--Pilih Jabatan--</option>
                            <?php foreach ($jabatan as $j): ?>
                                <option value="<?= $j->nama_jabatan ?>">
                                    <?= $j->nama_jabatan ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control">
                        <?= form_error('tanggal_masuk', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group input-primary">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="">--Pilih Status--</option>
                            <option value="Pegawai Tetap">Pegawai Tetap</option>
                            <option value="Pegawai Tidak Tetap"> Pegawai Tidak Tetap</option>
                        </select>
                        <?= form_error('status', '<div class="text-small text-danger"></div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>

                    <div class="form-group input-primary">
                        <label>Hak Akses</label>
                        <select name="hak_akses" class="form-control">
                            <option value="">--Pilih Hak Akses--</option>
                            <option value="1">Admin</option>
                            <option value="2">Pegawai</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>



                </form>


            </div>
        </div>

    </div>
</div>