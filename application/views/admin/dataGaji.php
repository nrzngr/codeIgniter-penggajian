<!-- Begin Page Content -->
<div class="content-body">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Transaksi</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">
                        <?= $title; ?>
                    </a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-block">
                        Filter Data Gaji Pegawai
                    </div>
                    <div class="card-body">
                        <form action="" class="basic-form">

                            <div class="form-group mb-2">
                                <label for="staticEmail2">
                                    Bulan
                                </label>
                                <select class="form-control ml-2" name="bulan">
                                    <option value="">Pilih Bulan</option>
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

                            <div class="form-group mb-2 ml-5">
                                <label for="staticEmail2">
                                    Tahun
                                </label>
                                <select class="form-control ml-2" name="tahun">
                                    <option value="">Pilih Tahun</option>
                                    <?php $tahun = date('Y');
                                    for ($i = 2023; $i < $tahun + 5; $i++) { ?>
                                        <option value="<?= $i ?>">
                                            <?= $i; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <?php
                            if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
                                $bulan = $_GET['bulan'];
                                $tahun = $_GET['tahun'];
                                $bulantahun = $bulan . $tahun;
                            } else {
                                $bulan = date('m');
                                $tahun = date('Y');
                                $bulantahun = $bulan . $tahun;
                            }
                            ?>

                            <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i>
                                Tampilkan
                                Data </button>

                            <?php if (count($gaji) > 0) { ?>
                                <a href="<?php echo base_url('admin/dataPenggajian/cetakGaji?bulan=' . $bulan . '&tahun=' . $tahun) ?>"
                                    class="btn btn-success mb-2 ml-3"><i class="fas fa-print"></i> Cetak Daftar Gaji </a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-success mb-2 ml-3" data-bs-toggle="modal"
                                    data-bs-target="#myModal"><i class="fas fa-print"></i> Cetak Daftar Gaji</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Informasi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Data gaji masih kosong, silahkan input absensi terlebih dahulu pada bulan
                                                dan tahun yang anda pilih
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </div>




            </div>

            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="alert alert-info">
                        Menampilkan Data Gaji Pegawai Bulan: <span class="font-weight-bold">
                            <?= $bulan; ?>
                        </span>
                        Tahun: <span class="font-weight-bold">
                            <?= $tahun; ?>
                        </span>
                    </div>
                    <div class="card-body">
                        <?php
                        $jml_data = count($gaji);
                        if ($jml_data > 0) { ?>
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <td style="width:80px;"><strong>No.</strong></td>
                                            <td><strong>NIK</strong></td>
                                            <td><strong>Nama Pegawai</strong></td>
                                            <td><strong>Jenis Kelamin</strong></td>
                                            <td><strong>Jabatan</strong></td>
                                            <th><strong>Gaji Pokok</strong></th>
                                            <th><strong>Tj. Transport</strong></th>
                                            <th><strong>Uang Makan</strong></th>
                                            <th><strong>Potongan</strong></th>
                                            <th><strong>Total Gaji</strong></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($potongan as $p) {
                                        $alpha = $p->jml_potongan;

                                    } ?>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($gaji as $g): ?>
                                            <?php $potongan = $g->alpha * $alpha ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td>
                                                    <?php echo $g->nik ?>
                                                </td>
                                                <td>
                                                    <?php echo $g->nama_pegawai ?>
                                                </td>
                                                <td>
                                                    <?php echo $g->jenis_kelamin ?>
                                                </td>
                                                <td>
                                                    <?php echo $g->nama_jabatan ?>
                                                </td>
                                                <td>Rp
                                                    <?php echo number_format($g->gaji_pokok, 0, ',', '.') ?>
                                                </td>
                                                <td>Rp
                                                    <?php echo number_format($g->tj_transport, 0, ',', '.') ?>
                                                </td>
                                                <td>Rp
                                                    <?php echo number_format($g->uang_makan, 0, ',', '.') ?>
                                                </td>
                                                <td>Rp
                                                    <?php echo number_format($potongan, 0, ',', '.') ?>
                                                </td>
                                                <td>Rp
                                                    <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.') ?>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        <?php } else { ?>
                            <span class="badge badge-danger">
                                <i class="fas fa-info-circle"></i>
                                Data masih kosong, silhkan input data kehadiran pada bulan dan tahun yang anda pilih.
                            </span>
                        <?php } ?>


                    </div>
                </div>
            </div>


        </div>

    </div>




</div>