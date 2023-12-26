<!-- Begin Page Content -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Master Data</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="card-header">
                        <h4 class="card-title">
                            <?= $title; ?>
                        </h4>
                        <a href="<?= base_url('admin/dataJabatan/tambahData') ?>"><button type="button"
                                class="btn btn-success">Tambah Data</button></a>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <form action="<?= base_url('admin/DataJabatan') ?>" method="post">
                                <div class="input-group mb-3 ml-5">
                                    <input type="text" class="form-control" placeholder="Cari jabatan" name="keyword">
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>No</strong></th>
                                        <th><strong>Nama Jabatan</strong></th>
                                        <th><strong>Gaji Pokok</strong></th>
                                        <th><strong>Tj. Transport</strong></th>
                                        <th><strong>Uang Makan</strong></th>
                                        <th><strong>Total</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($jabatan)): ?>
                                        <tr>
                                            <td colspan="11">
                                                <div class="alert alert-danger" role="alert">
                                                    Data tidak ditemukan
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                    <?php $no = 1;
                                    foreach ($jabatan as $j): ?>
                                        <tr>
                                            <td>
                                                <?= ++$start; ?>
                                            </td>
                                            <td>
                                                <?= $j['nama_jabatan']; ?>
                                            </td>
                                            <td>
                                                Rp.
                                                <?= number_format($j['gaji_pokok'], 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                Rp.
                                                <?= number_format($j['tj_transport'], 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                Rp.
                                                <?= number_format($j['uang_makan'], 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                Rp.
                                                <?= number_format($j['gaji_pokok'] + $j['tj_transport'] + $j['uang_makan'], 0, ',', '.'); ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-warning light sharp"
                                                        data-bs-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewbox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item"
                                                            href="<?php echo base_url('admin/dataJabatan/updateData/' . $j['id_jabatan']) ?>">Edit</a>
                                                        <a class="dropdown-item" onclick="return confirm('Yakin Hapus?')"
                                                            href="<?php echo base_url('admin/dataJabatan/deleteData/' . $j['id_jabatan']) ?>">Delete</a>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>