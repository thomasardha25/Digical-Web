<html>

<head>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('') ?>assets/img/logo/favicon.png">

    <title>Laporan Pasien</title>
</head>

<style>
    table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    table td,
    table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #ddd;
    }

    table th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        background-color: #1fac96;
        color: white;
    }
</style>

<body>
    <div style="text-align: center;">
        <h2>Data Pasien</h2>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Penyakit</th>
            <th>Alamat</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tb_pasien as $row) {
        ?>
            <tr>
                <td style="text-align: center;"><?php echo $no++; ?></td>
                <td><?php echo ucwords(strtolower($row->nama)); ?></td>
                <td><?php echo ucwords(strtolower($row->penyakit)); ?></td>
                <td><?php echo ucwords(strtolower($row->alamat)); ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>