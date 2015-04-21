<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> TAHUN PELAPORAN</h3>
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
								<th>NAMA</th>
								<th>STATUS</th>
								<th>AKSI</th>
						</thead>
						<tbody>
							<?php foreach($data->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->tahun.'</td>';
										if($row->status==1){$status='Aktif';}else{$status='Tidak Aktif';}
										echo '	<td>'.$status.'</td>';
										echo '	<td width="25%">
										<button class="btn edit" onclick="ubahModal(\''.$row->tahun.'\',\''.$row->status.'\')" link="'.base_url().'pelaporan/coba" data-target="#ubahModal" role="button" data-toggle="modal">
											<i class="icon-edit"></i>
											Ubah Status
										</button>
										<button class="btn btn-danger" onclick="kirimId(\''.$row->tahun.'\')" data-target="#hapusModal" role="button" data-toggle="modal">
											<i class="icon-trash"></i>
											Hapus
										</button>
										</td>';
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>

<div id="ubahModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="ubModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="ubModalLabel">
    		Ubah Status
    	</h3>
  	</div>
    <?php $config = array('class'=>'form-horizontal', 'id'=>'formUbahStatus'); echo form_open('pelaporan/ubahStatus', $config);?>
	<div class="modal-body">
	<fieldset>
	<div id="ubahData" style="padding: 10px;">
	    
	</div>
	</fieldset>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true" type="button">Batal</button>
		<button class="btn btn-primary" type="submit">Simpan</button>
	</div>
    </form>
</div>

<div id="hapusModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="haModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="haModalLabel">
    		Ubah Status
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
  $('#Unit').DataTable();
})

function kirimId(id)
{
	var pesan = "Anda akan menghapus <strong>"+id+"</strong> dari Tabel, klik Hapus untuk melanjutkan.";
	$('#hapusData').html(pesan);
	$("#hapus").attr("href","<?php echo base_url();?>pelaporan/delete/"+id);
}

function ubahModal(thn, sts){
	var status;
	var status1;
	if(sts == 0){ status = "checked"}else{status=""};
	if(sts == 1){ status1 = "checked"}else{status1=""};
	
	var pesan = "Tidak Aktif "+
		  "<input type='hidden' value='"+thn+"' name='tahun'>"+
		  "<input type='radio' value='0' name='status' "+status+" id='status'>&nbsp;&nbsp;&nbsp;&nbsp;"+
		  "Aktif <input type='radio' value='1' name='status' "+status1+" id='status'>";
	$('#ubahData').html(pesan);
	
}
</script>