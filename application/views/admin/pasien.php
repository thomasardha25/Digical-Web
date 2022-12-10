<!-- Begin Page Content -->
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('admin') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?= $title; ?></li>
    </ol>

    <?= $this->session->flashdata('message'); ?>

    <div class="card shadow mb-4">
        <div class="card-header bg-white">
            <b>Import Data</b>
        </div>

        <div class="card-body p-3">
            <!-- FORM IMPORT START -->
            <!-- <form method="post" action="<?php echo base_url('ImportExcel/spreadsheet_import'); ?>" enctype="multipart/form-data">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form> -->
            <!-- FORM IMPORT END -->

            <!-- FORM IMPORT START -->
            <form method="post" action="<?php echo base_url('ImportExcel/spreadsheet_import'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="upload_file" class="form-control" placeholder="Enter Name" id="upload_file" style="height: 44px;" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </form>
            <!-- FORM IMPORT END -->
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header bg-white">
            <b>Tabel Pasien</b>
            <span class="float-right">
                <!-- BUTTON TAMBAH START -->
                <a href="<?= base_url('pasien/tambah_data') ?>" class="btn btn-primary my-2">Tambah Data</a>
                <!-- BUTTON TAMBAH END -->

                <!-- BUTTON GRAFIK START -->
                <a href="<?= base_url('chart') ?>" class="btn btn-info my-2">Tampilkan Grafik</a>
                <!-- BUTTON GRAFIK END -->

                <!-- BUTTON EXPORT EXCEL START -->
                <a href="<?php echo base_url('Phpspreadsheet/export') ?>" class="btn btn-success my-2">Export Excel</a>
                <!-- BUTTON EXPORT EXCEL END -->

                <!-- BUTTON EXPORT PDF START -->
                <a href="<?php echo base_url('pasien/expdf') ?>" class="btn btn-danger my-2">Export PDF</a>
                <!-- BUTTON EXPORT PDF END -->
            </span>
        </div>
        <div class="card-body p-3">
            <div class="col-lg">
                <!-- TABEL PASIEN START -->
                <table class="table table-bordered" id="myTable" style="border: none;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">PENYAKIT</th>
                            <th scope="col">ALAMAT</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pasien->result() as $pas) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo ucwords(strtolower($pas->nama)); ?></td>
                                <td><?php echo ucwords(strtolower($pas->penyakit)); ?></td>
                                <td><?php echo ucwords(strtolower($pas->alamat)); ?></td>
                                <td class="">
                                    <a href="<?php echo base_url('pasien/edit_data/') ?><?php echo $pas->id; ?>" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="<?php echo base_url('pasien/hapus/') ?><?php echo $pas->id; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal<?php echo $pas->id; ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- TABEL PASIEN END -->
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php foreach ($pasien->result() as $pas) { ?>
    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal<?php echo $pas->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin hapus?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih hapus jika yakin</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="<?= base_url('pasien/hapus/'); ?><?php echo $pas->id; ?>">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</div>
<!-- End of Main Content -->