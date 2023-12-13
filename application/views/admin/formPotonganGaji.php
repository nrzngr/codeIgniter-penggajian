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

        <div class="card" style="width: 65%">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/potonganGaji/tambahDataAksi') ?>">

                    <div class="form-group">
                        <label>Jenis Potongan</label>
                        <input type="text" name="potongan" class="form-control">
                        <?php echo form_error('potongan') ?>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Potongan</label>
                        <input type="number" name="jml_potongan" class="form-control">
                        <?php echo form_error('jml_potongan') ?>
                    </div>


                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>

                </form>

            </div>
        </div>

    </div>
</div>