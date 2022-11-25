<!-- Begin Page Content -->
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('admin') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= base_url('pasien') ?>">Pasien</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>

    <div class="card shadow mb-4">
        <div class="card-header bg-white">
            <b>Tambah Data</b>
        </div>
        <div class="card-body p-3">
            <div class="col-lg-8">
                <form action="<?= base_url('pasien/simpan') ?>" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Penyakit</label>
                        <input type="text" name="penyakit" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->