<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Ubah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formEditTujuan'); echo form_open('program_c/updateTujuan', $config);?>
			<div class="modal-body">
			<?php foreach($tujuan as $key => $value){ ?>
			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="uraian">Uraian</label>
					<div class="controls">
						<textarea class="span6" rows="5" name="uraian"><?php echo $value->uraian; ?></textarea>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="nama">Tahun</label>
					<div class="controls">
						<input type="text" class="span1" name="tahun" value="<?php echo $value->tahun; ?>">
						<input type="hidden" name="id" value="<?php echo $value->id; ?>">
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