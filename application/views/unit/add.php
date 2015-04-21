<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('unit/insert', $config);?>
			<div class="modal-body">
			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="nama">NAMA</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="nama">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">SINGKATAN</label>
					<div class="controls">
						<input type="text" class="span6" id="singkatan" name="singkatan">
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
								# code...
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
						<input type="text" class="span6" id="username" name="username">
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">PASSWORD</label>
					<div class="controls">
						<input type="password" class="span6" id="password" name="password">
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