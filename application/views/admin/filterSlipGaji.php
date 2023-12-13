<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Laporan</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card mx-auto">
                <div class="card-header bg-primary text-white text-center">
                    Filter Slip Gaji
                </div>

                <form action="<?= base_url('admin/slipGaji/cetakSlipGaji') ?>" method="post">



                    <div class="card-body">
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Bulan</label>
                            <div class="col-sm-9">
                                <select class="form-control text-center" name="bulan">
                                    <option value="">--Pilih Bulan--</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Tahun</label>
                            <div class="col-sm-9">
                                <select class="form-control text-center" name="tahun">
                                    <option value="">--Pilih Tahun--</option>
                                    <?php $tahun = date('Y');
                                    for ($i = 2023; $i < $tahun + 5; $i++) { ?>
                                        <option value="<?= $i ?>">
                                            <?= $i; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Nama Pegawai</label>
                            <div class="col-sm-9">
                                <select class="form-control text-center" name="nama_pegawai">
                                    <option value="">--Pilih Pegawai--</option>
                                    <?php foreach ($pegawai as $p): ?>
                                        <option value="<?php echo $p->nama_pegawai ?>">
                                            <?php echo $p->nama_pegawai ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <button style="width: 100%" type="submit" class="btn btn-primary mt-3"><i
                                class="fas fa-print mr-2"></i> Cetak
                            Slip Gaji</button>
                    </div>
                </form>
            </div>
        </div>




    </div>
</div>