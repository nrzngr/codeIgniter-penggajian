<!-- Begin Page Content -->
<div class="content-body" id="content">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">

                <li class="breadcrumb-item active"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>
        <!-- Page Heading -->
        <div class="col-lg-12">
            <div class="card">


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Bulan/Tahun</th>
                                    <th>Gaji Pokok</th>
                                    <th>Tj. Transportasi</th>
                                    <th>Uang Makan</th>
                                    <th>Potongan</th>
                                    <th>Total Gaji</th>
                                    <th>Cetak Slip</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($potongan as $p): ?>
                                    <?php $potongan = $p->jml_potongan; ?>
                                <?php endforeach; ?>

                                <?php foreach ($gaji as $g): ?>
                                    <?php $pot_gaji = $g->alpha * $potongan ?>
                                    <tr>
                                        <td>
                                            <?php echo $g->bulan ?>
                                        </td>
                                        <td>Rp.
                                            <?php echo number_format($g->gaji_pokok, 0, ',', '.') ?>
                                        </td>
                                        <td>Rp.
                                            <?php echo number_format($g->tj_transport, 0, ',', '.') ?>
                                        </td>
                                        <td>Rp.
                                            <?php echo number_format($g->uang_makan, 0, ',', '.') ?>
                                        </td>
                                        <td>Rp.
                                            <?php echo number_format($pot_gaji, 0, ',', '.') ?>
                                        </td>
                                        <td>Rp.
                                            <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $pot_gaji, 0, ',', '.') ?>
                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn btn-sm btn-primary"
                                                    href="<?php echo base_url('pegawai/dataGaji/cetakSlip/' . $g->id_kehadiran) ?>"><i
                                                        class="fas fa-print"></i></a>
                                            </center>
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