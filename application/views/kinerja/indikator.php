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
			<h3>INDIKATOR</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>kinerja/add_indikator/<?php echo $this->uri->segment(3); ?>" >
						<i class="icon-plus-sign"></i>
						Tambah
					</a>
					<hr>
				<!-- </h6> -->

					<table id="indikator" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>NO</th>
								<th>URAIAN</th>
								<th>TARGET</th>
								<th>SATUAN</th>
								<th>REALISASI</th>
								<th></th>
								<th></th>
								
						</thead>
						<tbody>
							<?php $i=0;
								foreach($data->result() as $row){
								$i++;
										echo '<tr>';
										echo '	<td>'.$i.'</td>';
										echo '	<td>'.$row->uraian.'</td>';
										echo '	<td>'.$row->target.'</td>';
										echo '	<td>'.$row->satuan.'</td>';
										echo '	<td>'.$row->realisasi.'</td>';
										echo '	<td><a href="'.base_url().'kinerja/edit_indikator/'.$row->id.'/'.$this->uri->segment(3).'" class="btn btn-info"><i class="icon-edit"></i> EDIT</a></td>';
										echo '	<td><button class="btn btn-danger" onclick="kirimId(\''.$row->id.'\',\''.$this->uri->segment(3).'\')" data-target="#hapusModal" role="button" data-toggle="modal">
											<i class="icon-trash"></i>
											Hapus
										</button></td>';
										
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>
<div id="hapusModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ubModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="ubModalLabel">
    		Hapus Data
    	</h3>
  	</div>
    <div id="hapusData" style="padding: 10px;">
  	
    </div>
    <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
	    <a class="btn btn-primary" href="#" id="hapus">Hapus</a>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('#sasaran').DataTable();
  $('#indikator').DataTable();
})
function kirimId(id,sasaran)
{
	var pesan = "Anda akan menghapus <strong>INDIKATOR</strong> dari Tabel, klik Hapus untuk melanjutkan.";
	$('#hapusData').html(pesan);
	$("#hapus").attr("href","<?php echo base_url();?>kinerja/delete_indikator/"+id+"/"+sasaran);
}
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