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

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formEditUnit'); echo form_open('kegiatan/proses_edit_kegiatan', $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($m_kegiatan as $data){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="uraian">URAIAN</label>
					<div class="controls">
						<input type="text" class="span6" id="uraian" name="uraian" value="<?php echo $data->uraian;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="indikator">INDIKATOR</label>
					<div class="controls">
						<input type="text" class="span6" id="indikator" name="indikator" value="<?php echo $data->indikator;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="target">TARGET</label>
					<div class="controls">
						<input type="text" class="span6" id="target" name="target" value="<?php echo $data->target;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="satuan">SATUAN</label>
					<div class="controls">
						<input type="text" class="span6" id="satuan" name="satuan" value="<?php echo $data->satuan;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="realisasi">REALISASI</label>
					<div class="controls">
						<input type="text" class="span6" id="realisasi" name="realisasi" value="<?php echo $data->realisasi;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="sasaran">SASARAN</label>
					<div class="controls">
						<input type="text" class="span6" id="sasaran" name="sasaran" value="<?php echo $data->sasaran;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="indikatorsasaran">INDIKATORSASARAN</label>
					<div class="controls">
						<input type="text" class="span6" id="indikatorsasaran" name="indikatorsasaran" value="<?php echo $data->indikatorsasaran;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="tahun">TAHUN</label>
					<div class="controls">
						<input type="text" class="span6" id="tahun" name="tahun" value="<?php echo $data->tahun;?>">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="unit">UNIT</label>
					<div class="controls">
						<input type="text" class="span6" id="unit" name="unit" value="<?php echo $data->unit;?>">
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