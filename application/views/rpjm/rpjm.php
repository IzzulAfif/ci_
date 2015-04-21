<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3>RPJM</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>rpjm/add" >
						<i class="icon-plus-sign"></i>
						Tambah Data
					</a>
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>TAHUN AWAL</th>
								<th>TAHUN AKHIR</th>
								<th></th>
						</thead>
						<tbody>
							<?php foreach($data->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->tahunawal.'</td>';
										echo '	<td>'.$row->tahunakhir.'</td>';
										echo '	<td>';
										echo '	<a class="btn btn-primary" href="'.base_url().'rpjm/edit/'.$row->tahunawal.'" ><i class="icon-plus-sign"></i>EDIT</a>';
										echo '	<a class="btn btn-primary" href="'.base_url().'rpjm/delete/'.$row->tahunawal.'" ><i class="icon-plus-sign"></i>HAPUS</a></td>';
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
});

</script>