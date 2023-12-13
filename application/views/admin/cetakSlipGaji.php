<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <style type="text/css">
        body{
            font-family: Arial;
            color:black;
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
    <h1>PT. NEVERLAND SOLID INDONESIA</h1>
    <h2>Slip Gaji Pegawai</h2>
    <hr style="width: 50%; border-width: 5px; color: black">
</center>


<?php foreach($potongan as $p) {
$potongan=$p->jml_potongan;
} ?>
    

<?php foreach($print_slip as $ps) : ?>

<?php $potongan_gaji=$ps->alpha * $potongan; ?>

<table style="width: 100%">
    <tr>
        <td width="20%">Nama Pegawai</td>
        <td width="2%">:</td>
        <td><?php echo $ps->nama_pegawai ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $ps->nik ?></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $ps->nama_jabatan ?></td>
    </tr>
    <tr>
        <td>Bulan</td>
        <td>:</td>
        <td><?php echo substr($ps->bulan, 0,2) ?></td>
        
    </tr>

    <tr>
        <td>Tahun</td>
        <td>:</td>
        <td><?php echo substr($ps->bulan, 2,4) ?></td>
    </tr>
</table>


<table class="table table-striped table-bordered mt-3">
    <tr>
        <th class="text-center" width="5%">No</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Jumlah</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Gaji Pokok</td>
        <td>Rp. <?php echo number_format($ps->gaji_pokok,0,',','.') ?></td>
    </tr>

    <tr>
        <td>2</td>
        <td>Tunjangan Transportasi</td>
        <td>Rp. <?php echo number_format($ps->tj_transport,0,',','.') ?></td>
    </tr>

    <tr>
        <td>3</td>
        <td>Uang Makan</td>
        <td>Rp. <?php echo number_format($ps->uang_makan,0,',','.') ?></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Potongan</td>
        <td>Rp. <?php echo number_format($potongan_gaji,0,',','.') ?></td>
    </tr>
    <tr>
        <th colspan="2" style="text-align: right;">Total Gaji</th>
        <th>Rp. <?php echo number_format($ps->gaji_pokok+$ps->tj_transport+$ps->uang_makan-$potongan_gaji,0,',','.') ?></th>
    </tr>
</table>

<table width="100%">
    <tr>
        <td></td>
        <td>
            <p>Pegawai</p>
            <br>
            <br>
            <p class="font-weight-bold"><?php echo $ps->nama_pegawai ?></p>
        </td>

        <td width="200px">
            <p>Karawang, <?php echo date("d M Y") ?> <br> Finance,</p>
            <br>
            <br>
            <p>__________________________</p>
        </td>
    </tr>
</table>

<?php endforeach; ?>

</body>
</html>


<script type="text/javascript">
    window.print();
</script>