<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Program</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

					<table class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>
									Uraian
								</th>
								<th>
									RPJM
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($program as $key => $value) {

							?>
							<tr>
								<td>
									<?php echo $value->uraian; ?>
								</td>
								<td>
									<?php echo $value->rpjm; ?>
								</td>
							</tr>
							<?php } ?>
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
			<h3> Tujuan Program</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>program_c/addTujuan/<?php echo $idTujuan;?>">
						<i class="icon-plus-sign"></i>
						Tambah
					</a>
					<hr>
					<table id="tujuanProgram" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>
									No
								</th>
								<th>
									Uraian
								</th>
								<th>
									Tahun
								</th>
								</th>
								<th>
									Aksi
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							foreach ($tujuan as $key => $value) {
							?>
							<tr>
								<td>
									<?php echo ($no+1); ?>
								</td>
								<td>
									<?php echo $value->uraian; ?>
								</td>
								<td width="10%">
									<?php echo $value->tahun; ?>
								</td>
								<td width="20%">
									<a class="btn btn-primary" href="<?php echo base_url()."program_c/editTujuan/".$value->id;?>">
										<i class="icon-edit"></i>
										Edit
									</a>
									<button class="btn btn-danger" onclick="kirimId('<?php echo $value->id;?>','<?php echo $value->tahun;?>')" data-target="#hapusModal" role="button" data-toggle="modal">
										<i class="icon-trash"></i>
										Hapus
									</button>
								</td>
							</tr>
							<?php $no++; } ?>
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
  	$('#tujuanProgram').DataTable();
})

function kirimId(id, nama)
{
	var pesan = "Anda akan menghapus <strong>"+nama+"</strong> dari Tabel, klik Hapus untuk melanjutkan.";
	$('#hapusData').html(pesan);
	$("#hapus").attr("href","<?php echo base_url();?>program_c/deleteTujuan/"+id);
}
</script>