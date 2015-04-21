<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> DATA KEGIATAN</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>kegiatan/add" >
						<i class="icon-plus-sign"></i>
						Tambah
					</a>
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>NO</th>
								<th>UNIT</th>
								<th>URAIAN</th>
								<th>INDIKATOR KEGIATAN</th>
								<th>TARGET</th>
								<th>SATUAN</th>
								<th>REALISASI</th>
								<th>SASARAN</th>
								<th>INDIKATORSASARAN</th>
								<th>TAHUN</th>
								<th>AKSI</th>
						</thead>
						<tbody>
						
							<?php 
							$no = 1;
							foreach($data->result() as $row){ ?>
			
										<tr>
										<td><?php echo $no;?></td>
										<td>
										<?php foreach($unit->result() as $unit_res => $value){
												if($value->id == $row->unit) {
												 
										echo $value->nama; 
										}
										} ?>
										</td>
										
										<td><?php echo $row->uraian; ?> </td>
										<td><?php echo $row->indikator;?></td>
										<td><?php echo $row->target;?></td>
										<td><?php echo $row->satuan;?></td>
										<td><?php echo $row->realisasi;?></td>
										<td width="15"><?php 
										foreach($sasaran->result() as $sasaran_res){
												if($sasaran_res->id == $row->sasaran) {
												 
										echo $sasaran_res->uraian; 
										}
										}
										
										
										?></td>
										<td width="15"><?php 
										foreach($indikator->result() as $indikator_res){
												if($indikator_res->id == $row->indikatorsasaran) {
												 
										echo $indikator_res->uraian; 
										}
										}
										
										?></td>
										<td><?php echo $row->tahun; ?></td>
										<td>
										     <a href="<?php echo base_url() . "kegiatan/edit_kegiatan/" . $row->id; ?>" class="btn btn-info"><i class="icon-edit"></i> EDIT</a>
										    <a href="<?php echo base_url()."kegiatan/hapus_kegiatan/". $row->id; ?>" class="btn btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title=""><i class="icon-trash"></i> HAPUS</button></a>
										    </td>;
										
										
										</tr>;
								<?php $no++;
												}
											?>
							 

							
							 </tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>

<div id="hapusModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="myModalLabel">
    		Hapus Data
    	</h3>
  	</div>
    <div id="hapusData" style="padding: 10px">
  	
    </div>
    <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
	    <a class="btn btn-primary" href="#" id="hapus">Hapus</a>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#Unit').DataTable();
})

function kirimId(id, nama)
{
	var pesan = "Anda akan menghapus <strong>"+nama+"</strong> dari Tabel, klik Hapus untuk melanjutkan.";
	$('#hapusData').html(pesan);
	$("#hapus").attr("href","<?php echo base_url();?>unit/delete/"+id);
}
</script>