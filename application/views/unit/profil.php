<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> DATA UNIT</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<!--<button class="btn btn-primary" onclick="addModal(this)" link="<?php //echo base_url();?>menu_c/tambah" data-target="#addModal" role="button" data-toggle="modal">
						<i class="icon-plus-sign"></i>
						Tambah
					</button>-->
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>NAMA</th>
								<th>SINGKATAN</th>
								<th></th>
						</thead>
						<tbody>
							<?php foreach($data->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->nama.'</td>';
										echo '	<td>'.$row->singkatan.'</td>';
										echo '	<td><a class="btn btn-primary" href="'.base_url().'unit/edit_profil/'.$row->id.'" ><i class="icon-plus-sign"></i>EDIT</a></td>';
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

</script>