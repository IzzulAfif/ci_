<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Edit Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('unit/update/'.$this->uri->segment(3), $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($data->result() as $row){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">NAMA</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="nama" value='<?php echo $row->singkatan; ?>'>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">SINGKATAN</label>
					<div class="controls">
						<input type="text" class="span6" id="singkatan" name="singkatan" value='<?php echo $row->singkatan; ?>'>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="tugas">TUGAS</label>
					<div class="controls">
						<input type="text" class="span6" id="tugas" name="tugas" value='<?php echo $row->tugas; ?>'>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">VISI</label>
					<div class="controls">
						<input type="text" class="span6" id="visi" name="visi" value='<?php echo $row->visi; ?>'>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">MISI</label>
					<div class="controls">
						<textarea rows="4" cols="509" name="misi"><?php echo $row->misi; ?></textarea>
					</div>			
				</div>
			</div>
			
			</fieldset>
			<?php } ?>
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