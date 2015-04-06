
<div class="span6">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
			<div class="widget big-stats-container">
				<div class="widget-content">

				<?php $config = array('class'=>'form-vertical', 'id'=>'formAddmenu'); echo form_open('menu_c/create', $config);?>
				
				<fieldset>
				<div class="span5">
					<div class="control-group">											
						<label class="control-label" for="nama">Nama</label>
						<div class="controls">
							<input type="text" class="span4" id="nama" name="nama">
						</div>			
					</div>
				</div>
				<div class="span5">
					<div class="control-group">											
						<label class="control-label" for="parent">Parent</label>
						<div class="controls">
							<select class="span4" name="parent">
								<option value="0">Parent - Parent</option>
								<?php
								foreach ($menu as $key => $value) {
									# code...
									echo "<option value='".$value->id."'>Child To - ".$value->nama."</option>";
								}
								?>
							</select>
						</div>											
					</div>
				</div>
				<div class="span1">
					<div class="control-group">											
						<label class="control-label" for="urutan">Urutan</label>
						<div class="controls">
							<input type="text" class="span1" id="urutan" name="urutan">
						</div>											
					</div>
				</div>
				<div class="span2">
					<div class="control-group">											
						<label class="control-label" for="urutan">Icon Name</label>
						<div class="controls">
							<input type="text" class="span2" id="iconMenu" name="icon" readonly>
						</div>											
					</div>
				</div>
				<div class="span1" style="margin-top: -5px">
					<div class="control-group">											
						<label class="control-label" for="urutan">&nbsp;</label>
						<div class="controls">
							<button class="btn span1" style="float: right;" onclick="lihatIcon()" type="button">Lihat</button>
						</div>											
					</div>
				</div>
				<div class="span5">
					<div class="control-group">											
						<label class="control-label" for="url">Url</label>
						<div class="controls">
							<input type="text" class="span4" id="url" name="url">
						</div>			
					</div>
				</div>

				<div class="span5">
					<div class="control-group">											
						<label class="control-label" for="status">Status</label>
						<div class="controls">
							<select name="status" class="span4">
								<option value="1">Aktif</option>
								<option value="0">Tidak Aktif</option>
							</select>
						</div>											
					</div>

				</fieldset>
				</div>

				<div class="span5">
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

	<div class="span6" id="lihatIcon">

	</div>

</div>

<script type="text/javascript">
function lihatIcon(){
	var url = "<?php echo base_url();?>menu_c/tampilIcon";
	$.ajax({
		url:url,
		success: function(res){
			$('#lihatIcon').html(res);
		}
	})
}
</script>