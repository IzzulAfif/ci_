<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> DATA SASARANLOOKUP</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<a class="btn btn-primary" href="<?php echo base_url();?>sasaranlookup/add" >
						<i class="icon-plus-sign"></i>
						Tambah
					</a>
					<hr>
				<!-- </h6> -->

					<table id="Unit" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>NO</th>
								<th>URAIAN</th>
								<th>AKSI</th>
						</thead>
						<tbody>
						
							<?php 
							$no = 1;
							foreach($data->result() as $row){ ?>
			
										<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $row->uraian; ?> </td>
										<td>
										     <a href="<?php echo base_url() . "sasaranlookup/edit_sasaranlookup/" . $row->id; ?>" class="btn btn-info"><i class="icon-edit"></i> EDIT</a>
										    <a href="<?php echo base_url()."sasaranlookup/hapus_sasaranlookup/". $row->id; ?>" class="btn btn-danger" data-toggle="confirmation" data-original-title="Are you sure ?" title=""><i class="icon-trash"></i> HAPUS</button></a>
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