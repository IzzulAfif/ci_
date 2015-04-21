<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> SASARAN STARTEGIS</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<table id="xxx" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>UNIT</th>
								<th>URAIAN</th>
								<th>PROGRAM</th>
								<th>PAGU</th>
								<th>REALISASI</th>
						</thead>
						<tbody>
							<?php foreach($sasaran->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->unit.'</td>';
										echo '	<td>'.$row->uraian.'</td>';
										echo '	<td>'.$row->program.'</td>';
										echo '	<td>'.$row->pagu.'</td>';
										echo '	<td>'.$row->realisasi.'</td>';
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>
<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('kinerja/insert_indikator/'.$this->uri->segment(3), $config);?>
					
					<table border='2' id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<tr>
							<td>NO</td>
							<td>URAIAN</td>
							<td>TARGET</td>
							<td>SATUAN</td>
							<td>REALISASI</td>
						</tr>
					<?php for($i=0;$i<10;$i++){ ?>
						<tr>
							<td><?php echo $i+1; ?></td>
							<td><textarea name="uraian[]"  rows="3" class='span4'></textarea></td>
							<td ><input class='span1' type="text" id="target" name="target[]"></td>
							<td><input class='span3' type="text" id="satuan" name="satuan[]"></td>
							<td><input class='span1' type="text" id="realisasi" name="realisasi[]"></td>
						</tr>
					<?php } ?>
					</table>
			

			<div class="span6">
				<div class="control-group">											
					<div class="controls">
						<button class="btn" onclick="goBack()" type="button">Batal</button>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</div>
			</div>
			</form>

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