<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('kinerja/insert_kinerja', $config);?>
			<div class="modal-body">
			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="parent">UNIT</label>
					<div class="controls">
						<select name='unit' class="span3" >
							<option value="0">PILIH-INDUK</option>
							<?php
							foreach ($unit->result() as $value) {
								echo "<option value='".$value->id."'>".$value->nama."</option>";
							}
							?>
						</select>
					</div>		
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">SASARAN</label>
					<div class="controls">
						<textarea name="uraian" class="span6" rows="5"></textarea>
					</div>			
				</div>
			</div>
			<!--<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">PROGRAM</label>
						<div class="controls">
							<textarea name="program" class="span6" rows="5"></textarea>
						</div>			
				</div>
			</div>-->
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">PROGRAM</label>
						<div class="controls">
							<select name="program" class="span6" rows="5" onchange='cekProgram(this)'>
									<option value=''>PILIH PROGRAM</option>
								<?php foreach($program as $prog){ 
									echo "<option value='".$prog->id."'>".$prog->uraian."</option>";
								 } ?>
							</select>
						</div>			
				</div>
			</div>
			<div id='tujuan'>
				<div class="span6">
					<div class="control-group">											
						<label class="control-label" for="url">TUJUAN</label>
							<div class="controls">
								<select name="tujuan" class="span6" rows="5">
									<option value=''>PILIH TUJUAN</option>
								</select>
							</div>			
					</div>
				</div>
			</div>
			<!--<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">PAGU</label>
					<div class="controls">
						<input type="text" class="span6" id="pagu" name="pagu">
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">REALISASI</label>
					<div class="controls">
						<input type="text" class="span6" id="password" name="realisasi">
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">TAHUN</label>
					<div class="controls">
						<input type="text" class="span6" id="password" name="tahun">
					</div>											
				</div>
			</div>-->
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

			</div>
		</div>
		</div>
	</div>
</div>
<script>
	function cekProgram(val){
		var id = $(val).val();
		url='<?php echo base_url(); ?>kinerja/getTujuan/'+id;
		$.ajax({
			url: url,
			success: function(data){
				$('#tujuan').html(data);
			}
		})
	}
</script>