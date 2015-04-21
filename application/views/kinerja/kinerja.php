<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> SASARAN STARTEGIS</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>kinerja/add_kinerja" >
						<i class="icon-plus-sign"></i>
						Tambah Data
					</a>
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>UNIT</th>
								<th>URAIAN</th>
								<th>PROGRAM</th>
								<th>PAGU</th>
								<th>REALISASI</th>
								<th></th>
								<th></th>
								<th></th>
						</thead>
						<tbody>
							<?php foreach($data->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->unit.'</td>';
										echo '	<td>'.$row->uraian.'</td>';
										echo '	<td>'.$row->program.'</td>';
										echo '	<td>'.$row->pagu.'</td>';
										echo '	<td>'.$row->realisasi.'</td>';
										echo '	<td><a class="btn btn-primary" href="'.base_url().'kinerja/indikator/'.$row->id.'" ><i class="icon-plus-sign"></i>INDIKATOR</a></td>';
										echo '	<td><a class="btn btn-primary" href="'.base_url().'kinerja/edit_kinerja/'.$row->id.'" ><i class="icon-plus-sign"></i>EDIT</a></td>';
										echo '	<td></td>';
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#Unit').DataTable();
})

function addModal(val){
	var url = $(val).attr('link');
	$.ajax({
		url: url,
		success: function(data){
			$('#addData').html(data);
		}
	})
}
</script>