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
            <b>Grafik Penyakit</b>
        </div>
        <div class="card-body p-3">
            <div class="col-lg">
                <div id="Chart"></div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    // Build the chart
    Highcharts.chart('Chart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Penyakit Berdasarkan Jumlah Penderita'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Jumlah Penderita',
            colorByPoint: true,

            //format data penyakit
            data: [
                <?php foreach ($data_penyakit as $tb_pasien) : ?> {
                        name: '<?php echo $tb_pasien['penyakit']; ?>',
                        y: <?php echo $tb_pasien['total']; ?>
                    },
                <?php endforeach ?>
            ]

            //format data original
            /*
	        data: [
	        		{
			            name: 'Chrome',
			            y: 61.41
			        }, 
			        {
			            name: 'Internet Explorer',
			            y: 11.84
			        }, 
			        {
			            name: 'Firefox',
			            y: 10.85
			        },
			   	]
			*/
        }]
    });
</script>