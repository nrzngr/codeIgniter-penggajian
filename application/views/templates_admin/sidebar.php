<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="<?php echo base_url('admin/dashboard')?>" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-fw fa-solid fa-database"></i>
                    <span class="nav-text">Master Data</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="ajax-link" href="<?php echo base_url('admin/dataPegawai') ?>">Data Pegawai</a></li>
                    <li><a href="<?php echo base_url('admin/dataJabatan') ?>">Data Jabatan</a></li>

                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Transaksi</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo base_url('admin/dataAbsensi') ?>">Data Absensi</a></li>
                    <li><a href="<?php echo base_url('admin/PotonganGaji') ?>">Setting Potongan Gaji</a></li>
                    <li><a href="<?php echo base_url('admin/dataPenggajian') ?>">Data Gaji</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="far fa-fw fa-copy"></i>
                    <span class="nav-text">Laporan</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo base_url('admin/laporanGaji') ?>">Laporan Gaji</a></li>
                    <li><a href="<?php echo base_url('admin/laporanAbsensi') ?>">Laporan Absensi</a></li>
                    <li><a href="<?php echo base_url('admin/slipGaji') ?>">Slip Gaji</a></li>

                </ul>
            </li>

            <li><a href="<?php echo base_url('gantiPassword') ?>" class="" aria-expanded="false">
                    <i class="fas fa-fw fa-lock"></i>
                    <span class="nav-text">Ganti Password</span>
                </a>
            </li>

            <li><a href="<?php echo base_url('autentifikasi/logout') ?>" class="" aria-expanded="false">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="nav-text">Log out</span>
                </a>
            </li>


            <div class="copyright">
                <p><strong>NRZNGR</strong> © 2023 All Rights Reserved</p>
                <p class="fs-12">Made with pressure by nrzngr</p>
            </div>
    </div>
</div>