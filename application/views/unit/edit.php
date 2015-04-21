<?php
// echo "<pre>";
// var_dump($unit);
// echo "</pre>";
?>
<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Ubah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formEditUnit'); echo form_open('unit/update', $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($unit->result() as $key => $row){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="nama">NAMA</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="nama" value="<?php echo $row->nama;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">SINGKATAN</label>
					<div class="controls">
						<input type="text" class="span6" id="singkatan" name="singkatan" value="<?php echo $row->singkatan;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="parent">INDUK</label>
					<div class="controls">
						<select class="span6" >
							<option value="0">PILIH-INDUK</option>
							<?php
							foreach ($menu as $key => $value) {
								$selected = ($row->induk == $value->induk)?"selected":"";
								echo "<option value='".$value->id."'>Child To - ".$value->nama."</option>";
							}
							?>
						</select>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">USERNAME</label>
					<div class="controls">
						<input type="text" class="span6" id="username" name="username" value="<?php echo $row->username;?>">
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">PASSWORD</label>
					<div class="controls">
						<input type="password" class="span6" id="password" name="password" value="<?php echo $row->password;?>">
						<input type="hidden" class="span6" value=1 id="userlevel" name="userlevel">
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="status">STATUS</label>
					<div class="controls">
						<select  class="span6">
							<option value="0">Aktif</option>
							<option value="1">Tidak Aktif</option>
						</select>
					</div>											
				</div>
			</div>
			<?php } ?>
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