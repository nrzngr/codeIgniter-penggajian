<!-- Begin Page Content -->
<div class="content-body" id="content">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <?= $title; ?>
            </h1>
        </div>




        <div class="col-lg-8">
            <div class="alert alert-success font-weight-bold mb-4">Selamat datang, Anda login sebagai
                pegawai.
            </div>
            <div class="card" style="margin-bottom: 120px;">
                <div class="card-header font-weight-bold bg-primary text-white">
                    Data Pegawai
                </div>


                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4 mb-3 ml-15">
                            <img style="width: 150px" src="<?php echo base_url('assets/images/' . $pegawai['photo']) ?>">
                        </div>

                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td>Nama Pegawai</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo $pegawai['nama_pegawai'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo $pegawai['jabatan'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo $pegawai['tanggal_masuk'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>
                                        <?php echo $pegawai['status'] ?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>




    </div>
</div>