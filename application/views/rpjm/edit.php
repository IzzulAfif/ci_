<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Edit Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddGroup'); echo form_open('rpjm/update/'.$this->uri->segment(3), $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($data->result() as $row){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="nama">TAHUN AWAL</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="tahunawal" value='<?php echo $row->tahunawal; ?>'>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="keterangan">TAHUN AKHIR</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="tahunakhir" value='<?php echo $row->tahunakhir; ?>'>
						
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