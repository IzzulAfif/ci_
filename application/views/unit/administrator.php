<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> DATA UNIT</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<button class="btn btn-primary" onclick="addModal(this)" link="<?php echo base_url();?>menu_c/tambah" data-target="#addModal" role="button" data-toggle="modal">
						<i class="icon-plus-sign"></i>
						Tambah
					</button>
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>USERNAME</th>
								<th>PASSWORD</th>
						</thead>
						<tbody>
							<?php foreach($data->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->username.'</td>';
										echo '	<td>'.$row->password.'</td>';
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>

<div id="addModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="myModalLabel">
    		Tambah Data
    	</h3>
  	</div>
  	<div class="modal-body">
    	<div id="addData">
    	</div>
  	</div>
  	<div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
	    <button class="btn btn-primary">Simpan</button>
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