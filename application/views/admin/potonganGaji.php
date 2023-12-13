<!-- Begin Page Content -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaksi</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <?= $title; ?>
                        </h4>
                        <a href="<?= base_url('admin/potonganGaji/tambahData') ?>"><button type="button"
                                class="btn btn-success">Tambah Data</button></a>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>No</strong></th>
                                        <th><strong>Jenis Potongan</strong></th>
                                        <th><strong>Jumlah Potongan</strong></th>
                                        <th><strong>Action</strong></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($pot_gaji as $p): ?>
                                        <tr>
                                            <td>
                                                <?php echo $no++ ?>
                                            </td>
                                            <td>
                                                <?php echo $p->potongan ?>
                                            </td>
                                            <td>Rp.
                                                <?php echo number_format($p->jml_potongan, 0, ',', '.') ?>
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
                                                            href="<?php echo base_url('admin/potonganGaji/updateData/' . $p->id) ?>">Edit</a>
                                                        <a class="dropdown-item" onclick="return confirm('Yakin Hapus?')"
                                                            href="<?php echo base_url('admin/potonganGaji/deleteData/' . $p->id) ?>">Delete</a>
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