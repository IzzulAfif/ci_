<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Grafik Pagu & Realisasi per Unit</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
			<table>
				<tr>
					<td>UNIT</td><td>:</td>
					<td>
					<select class="span3" id="unit1" >
							<option value="0" <?php echo $unitye==0?"selected":""; ?>>PILIH-INDUK</option>
							<?php
							foreach ($unit->result() as $value) {
								# code...
								?>
								<option <?php echo $unitye==$value->nama?"selected":""; ?>><?php echo $value->nama;?></option>";
								<?php
							}
							?>
					</select>
					</td>
				</tr>
			</table>
				<div class="span9">
			
					<div class="table-scrollable">
                        <div id="container_unit" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                    </div>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Grafik Sasaran Realisasi & Capaian per Unit</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<div class="table-scrollable">
                        <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                    </div>
			</div>
		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#unit1').change(function() {
		var unit=jQuery('#unit1').val();
		var bulan=jQuery('#bln').val();
		location.reload();
			window.location = "<?php echo site_url(); ?>Chart?unit1="+unit;
        });
        });

</script>
<script type="text/javascript">
//alert('hjhjh');
jQuery(function () {
	//alert("ihdhasuidhoiasd");
    jQuery('#container').highcharts({
        title: {
            text: 'Grafik Sasaran Realisasi & Capaian per Unit',
            x: -20 //center
        },
        subtitle: {
            //text: 'Source: WorldClimate.com',
            //x: -20
        },
        xAxis: {
            categories: [
                '2004',
                '2005',
                '2006',
                '2007',
                '2008',
                '2009',
                '2010',
                '2011',
                '2012',
                '2013',
                '2014',
                '2015'
            ],
			crosshair: true
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Mabes TNI',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'PUSINFOLAHTA',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'PUSBINTAL TNI',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'PUSJIANSTRA',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});


   jQuery(function () {
   $('#container_unit').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Unit per Pagu & Realisasi'
        },
        subtitle: {
            //text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [
                '2004',
                '2005',
                '2006',
                '2007',
                '2008',
                '2009',
                '2010',
                '2011',
                '2012',
                '2013',
                '2014',
                '2015'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (Rp)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>Rp {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
			<?php
			$jml_desimal="2";
			$pemisah=",";
			$pemisah_ribuan=".";
			$pagu = '[';
			$realisasi = '[';
			$j = 2004;
			foreach($hasil->result() as $k=>$v){
			 for($i=$j;$i<=2015;$i++){
				if($v->tahun == $i){
					$pagu.=$v->pagu.',';
					$realisasi.=$v->realisasi.',';
					$j=$i+1;
					if($j < 2015){
						break;
					}
				} else {
					$pagu.='0,';
					$realisasi.='0,';
				}
			 }}
			
			$pagu = rtrim($pagu,',');
			$realisasi = rtrim($realisasi,',');
			?>
			{
				name:'pagu',
				data:<?php echo $pagu;?>]
			},{
				name:'realisasi',
				data:<?php echo $realisasi;?>]
			},
		]
    });
});
</script>
