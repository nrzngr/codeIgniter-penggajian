<!-- Begin Page Content -->
<div class="content-body" id="main-content">
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
                    <div class="card-header">
                        <h4 class="card-title">
                            <?= $title; ?>
                        </h4>
                        <a href="<?= base_url('admin/dataPegawai/tambahData') ?>"><button type="button"
                                class="btn btn-success">Tambah Data</button></a>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>No</strong></th>
                                        <th><strong>NIK</strong></th>
                                        <th><strong>Nama Pegawai</strong></th>
                                        <th><strong>Jenis Kelamin</strong></th>
                                        <th><strong>Jabatan</strong></th>
                                        <th><strong>Tanggal Masuk</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>Photo</strong></th>
                                        <th><strong>Hak Akses</strong></th>
                                        <th><strong>Action</strong></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pegawai as $p): ?>
                                        <tr>
                                            <td>
                                                <?= $no++; ?>
                                            </td>
                                            <td>
                                                <?= $p->nik; ?>
                                            </td>
                                            <td>
                                                <?= $p->nama_pegawai; ?>
                                            </td>
                                            <td>
                                                <?= $p->jenis_kelamin; ?>
                                            </td>
                                            <td>
                                                <?= $p->jabatan; ?>
                                            </td>
                                            <td>
                                                <?= $p->tanggal_masuk; ?>
                                            </td>
                                            <td>
                                                <?= $p->status; ?>
                                            </td>
                                            <td><img src="<?= base_url() . 'assets/images/' . $p->photo ?>" width="75px">
                                            </td>
                                            <?php if ($p->hak_akses == '1') { ?>
                                                <td>Admin</td>
                                            <?php } else { ?>
                                                <td>Pegawai</td>
                                            <?php } ?>

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
                                                            href="<?php echo base_url('admin/dataPegawai/updateData/' . $p->id_pegawai) ?>">Edit</a>
                                                        <a class="dropdown-item" onclick="return confirm('Yakin Hapus?')"
                                                            href="<?php echo base_url('admin/dataPegawai/deleteData/' . $p->id_pegawai) ?>">Delete</a>
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