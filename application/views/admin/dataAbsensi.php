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

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header bg-primary text-white d-block">
                        Filter Data Absensi Pegawai
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

                            <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i>
                                Tampilkan
                                Data </button>
                            <a href="<?php echo base_url('admin/dataAbsensi/inputAbsensi') ?>"
                                class="btn btn-success mb-2 ml-3"><i class="fas fa-plus"></i> Input Kehadiran</a>
                        </form>
                    </div>
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


            </div>

            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="alert alert-info">
                            Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold">
                                <?= $bulan; ?>
                            </span>
                            Tahun: <span class="font-weight-bold">
                                <?= $tahun; ?>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php
                        $jml_data = count($absensi);

                        if ($jml_data > 0) {
                            ?>
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <td style="width:80px;"><strong>No.</strong></td>
                                            <td><strong>NIK</strong></td>
                                            <td><strong>Nama Pegawai</strong></td>
                                            <td><strong>Jenis Kelamin</strong></td>
                                            <td><strong>Jabatan</strong></td>
                                            <td><strong>Hadir</strong></td>
                                            <td><strong>Sakit</strong></td>
                                            <td><strong>Alpha</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($absensi as $a): ?>
                                            <tr>
                                                <td>
                                                    <?= $no++; ?>
                                                </td>
                                                <td>
                                                    <?= $a->nik; ?>
                                                </td>
                                                <td>
                                                    <?= $a->nama_pegawai; ?>
                                                </td>
                                                <td>
                                                    <?= $a->jenis_kelamin; ?>
                                                </td>
                                                <td>
                                                    <?= $a->nama_jabatan; ?>
                                                </td>
                                                <td>
                                                    <?= $a->hadir; ?>
                                                </td>
                                                <td>
                                                    <?= $a->sakit; ?>
                                                </td>
                                                <td>
                                                    <?= $a->alpha; ?>
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
    <!-- Page Heading -->



</div>