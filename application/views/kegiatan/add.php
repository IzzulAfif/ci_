<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('kegiatan/simpan_kegiatan', $config);?>
			<div class="modal-body">
			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="unit">UNIT</label>
					<div class="controls">
						<select class="span6" name="unit">
							<option value="0">PILIH-UNIT</option>
							<?php
							foreach ($unit->result() as $unit_res => $value) {
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
					<label class="control-label" for="uraian">URAIAN</label>
					<div class="controls">
						<input type="text" class="span6" id="uraian" name="uraian">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="indikator">INDIKATOR KEGIATAN</label>
					<div class="controls">
						<input type="text" class="span6" id="indikator" name="indikator">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="target">TARGET</label>
					<div class="controls">
						<input type="text" class="span6" id="target" name="target">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="satuan">SATUAN</label>
					<div class="controls">
						<input type="text" class="span6" id="satuan" name="satuan">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="realisasi">REALISASI</label>
					<div class="controls">
						<input type="text" class="span6" id="realisasi" name="realisasi">
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="sasaran">SASARAN</label>
					<div class="controls">
						<select class="span6" name="sasaran">
							<option value="0">PILIH-SASARAN</option>
							<?php
							foreach ($sasaran->result() as $sasaran_res => $value) {
								# code...
								echo "<option value='".$value->id."'>".$value->uraian."</option>";
							}
							?>
						</select>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="indikatorsasaran">INDIKATORSASARAN</label>
					<div class="controls">
						<select class="span6" name="indikatorsasaran">
							<option value="0">PILIH</option>
							<?php
							foreach ($indikator->result() as $indikator_res => $value) {
								# code...
								echo "<option value='".$value->id."'>".$value->uraian."</option>";
							}
							?>
						</select>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="tahun">TAHUN</label>
					<div class="controls">
						<input type="text" class="span6" id="tahun" name="tahun">
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