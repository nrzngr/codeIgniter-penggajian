<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title; ?>
    </title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: black;
        }
    </style>
    <link href="<?php echo base_url('/assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/demo/chart-pie-demo.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <center>
        <h1>PT.NEVERLAND SOLID INDONESIA</h1>
        <h2>Daftar Gaji Pegawai</h2>
    </center>

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

    <table>
        <tr>
            <td>Bulan</td>
            <td>:</td>
            <td>
                <?= $bulan; ?>
            </td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td>
                <?= $tahun; ?>
            </td>
        </tr>
    </table>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">NIK</th>
                <th class="text-center">Nama Pegawai</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Gaji Pokok</th>
                <th class="text-center">Tj. Transport</th>
                <th class="text-center">Uang Makan</th>
                <th class="text-center">Potongan</th>
                <th class="text-center">Total Gaji</th>
            </tr>

            <?php foreach ($potongan as $p) {
                $alpha = $p->jml_potongan;

            } ?>
            <?php $no = 1;
            foreach ($cetakGaji as $g): ?>
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

        </table>

        <table width="100%">
            <tr>
                <td></td>
                <td width="200px">
                    <p>Karawang,
                        <?= date("d M Y"); ?> <br> Finance
                    </p>
                    <br>
                    <br>
                    <p>________________________________</p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<script>
    window.print();
</script>