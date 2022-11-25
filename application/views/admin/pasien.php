<!-- Begin Page Content -->
<div class="container-fluid">

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url('admin') ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?= $title ?></li>
    </ol>

    <?= $this->session->flashdata('message'); ?>

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
                <a href="#" class="btn btn-success my-2">Export Excel</a>
                <!-- BUTTON EXPORT EXCEL END -->

                <!-- BUTTON EXPORT PDF START -->
                <a href="#" class="btn btn-danger my-2">Export PDF</a>
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
                                    <a href="<?php echo base_url('pasien/hapus_data/') ?><?php echo $pas->id; ?>" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal">Hapus</a>
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

</div>
<!-- End of Main Content -->