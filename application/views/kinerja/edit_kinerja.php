<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> EDIT KINERJA</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('kinerja/update_kinerja/'.$this->uri->segment(3), $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($data->result() as $row){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="parent">UNIT</label>
					<div class="controls">
						<select class="span3" >
							<option value="0">PILIH-INDUK</option>
							<?php
							foreach ($unit->result() as $value) {
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
					<label class="control-label" for="url">URAIAN</label>
					<div class="controls">
						<textarea name="uraian" class="span6" rows="5" ><?php echo $row->uraian; ?></textarea>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="url">PROGRAM</label>
						<div class="controls">
							<textarea name="program" class="span6" rows="5" ><?php echo $row->program; ?></textarea>
						</div>			
				</div>
			</div>
				
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">PAGU</label>
					<div class="controls">
						<input type="text" class="span6" id="pagu" name="pagu" value='<?php echo $row->pagu; ?>'>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">REALISASI</label>
					<div class="controls">
						<input type="text" class="span6" id="password" name="realisasi" value='<?php echo $row->realisasi; ?>'>
					</div>											
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">TAHUN</label>
					<div class="controls">
						<input type="text" class="span6" id="password" name="tahun" value='<?php echo $row->tahun; ?>'>
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