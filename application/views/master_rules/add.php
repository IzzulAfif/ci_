<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddRules'); echo form_open('rules_c/create', $config);?>
			<!-- <div class="modal-body"> -->
			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="group_id">Group Pengguna</label>
					<div class="controls">
						<select class="span6" name="group_id" id="group_id">

							<?php
							foreach ($group as $key => $value) {
								# code...
								echo "<option value='".$value->id."'>".$value->nama."</option>";
							}
							?>
						</select>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="group_id">Menu</label>
					<div class="controls">
						<select class="span6" name="menu_id" id="menu_id">

							<?php
							foreach ($menu as $key => $value) {
								# code...
								echo "<option value='".$value->id."'>".$value->nama."</option>";
							}
							?>
						</select>
					</div>											
				</div>
			</div>

			<div class="span6">
				<div class="control-group">											
					<div class="controls">
						<button class="btn" onclick="addRules()" type="button"><i class="icon-plus-sign"></i>Tambah</button>
					</div>
				</div>
			</div>
			
			<div class="span8">
				<div class="control-group">											
					<div class="controls">
						<table id="rules-table" class="table table-striped table-bordered table-hover table-full-width">
							<thead>
								<th>
									Id
								</th>
								<th>
									Nama
								</th>
								<th>
									Pribadi
								</th>
								<th>
									Tampil
								</th>
								<th>
									Tambah
								</th>
								<th>
									Update
								</th>
								<th>
									Hapus
								</th>
								<th>
									Aksi
								</th>
							</thead>
						</table>
					</div>
				</div>
			</div>

			</fieldset>
			</div>

			<div class="span6">
				<div class="control-group">										
					<div class="controls">
						<button class="btn" onclick="goBack()" type="button">Batal</button>
						<button class="btn btn-primary" type="submit">Simpan</button>
					</div>
				</div>
			</div>
			</form>

			<!-- </div> -->
		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function addRules()
{
	var obj = {
			id:'',
			modul_kode : $('#menu_id').val(),
			name : $('#menu_id').find('option:selected').text(),
			tampil : '1',
			tampil_check : 'checked',
			tambah : '1',
			tambah_check : 'checked',
			pribadi : '1',
			pribadi_check : 'checked',
			update : '1',
			update_check : 'checked',
			hapus : '1',
			hapus_check : 'checked'
		};
	add_row_rules(obj);
}

var menu = '<?php echo json_encode($menu); ?>',
	jMenu = JSON.parse(menu),
	cmbmenu = $('#menu_id');

function add_row_rules(obj)
{	
	var attR = cmbmenu.find('option[value="'+obj.modul_kode+'"]');

	if(attR.attr('disabled') === 'disabled'){
		alert('Tidak bisa memilih '+obj.name+' lagi.')
	}else{
		$('#rules-table').append(
			'<tr>' +
			'<td><input type="hidden" name="menu_id[]" value="'+obj.modul_kode+'"/>'+obj.modul_kode+'</td>'+
			'<td><input type="hidden" name="id[]" value="'+obj.id+'"/>'+obj.name+'</td>'+
			'<td><input type="hidden" name="pribadi[]" value="'+obj.pribadi+'"/><input type="checkbox" onclick="click_checkbox(this,2)" '+obj.pribadi_check+'/></td>'+
			'<td><input type="hidden" name="tampil[]" value="'+obj.tampil+'"/><input type="checkbox" onclick="click_checkbox(this,3)" '+obj.tampil_check+'/></td>'+
			'<td><input type="hidden" name="tambah[]" value="'+obj.tambah+'"/><input type="checkbox" onclick="click_checkbox(this,4)" '+obj.tambah_check+'/></td>'+
			'<td><input type="hidden" name="update[]" value="'+obj.update+'"/><input type="checkbox" onclick="click_checkbox(this,5)" '+obj.update_check+'/></td>'+
			'<td><input type="hidden" name="hapus[]" value="'+obj.hapus+'"/><input type="checkbox" onclick="click_checkbox(this,6)" '+obj.hapus_check+'/></td>'+
			'<td><a style="cursor:pointer;" class="btn btn-danger hapusRowRules" title="Hapus" onclick="deleteRules(this, '+obj.modul_kode+')"><i class="icon-trash"></i> Hapus</a></td></tr>'
		);

		cmbmenu.find('option[value="'+obj.modul_kode+'"]').attr('disabled',true);
	}

	
}

function click_checkbox(tr, index)
{
	if($(tr).is(':checked'))
	{
		$(tr).parents('tr').find('td:eq('+index+') input').val('1');
	}
	else
	{
		$(tr).parents('tr').find('td:eq('+index+') input').val('0');
	}
}

function deleteRules(val, id){

	var par = $(val).closest('tr'); //tr
	if(confirm('Anda yakin?'))
	{
		par.remove();
		cmbmenu.find('option[value="'+id+'"]').attr('disabled',false);
	}
	return false;
}; 
</script>