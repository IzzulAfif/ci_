<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> SASARAN STARTEGIS</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
					<table id="xxx" class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>UNIT</th>
								<th>URAIAN</th>
								<th>PROGRAM</th>
								<th>PAGU</th>
								<th>REALISASI</th>
						</thead>
						<tbody>
							<?php foreach($sasaran->result() as $row){
			
										echo '<tr>';
										echo '	<td>'.$row->unit.'</td>';
										echo '	<td>'.$row->uraian.'</td>';
										echo '	<td>'.$row->program.'</td>';
										echo '	<td>'.$row->pagu.'</td>';
										echo '	<td>'.$row->realisasi.'</td>';
										echo '	</tr>';
								
							 } ?>
						</tbody>
					</table>

			</div>
		</div>
		</div>
	</div>
</div>
<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> EDIT KINERJA</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddmenu'); echo form_open('kinerja/update_indikator/'.$this->uri->segment(3).'/'.$this->uri->segment(4), $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($data->result() as $row){ ?>
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
					<label class="control-label" for="url">TARGET</label>
						<div class="controls">
							<input type="text" class="span6" id="password" name="target" value='<?php echo $row->target; ?>'>
						</div>			
				</div>
			</div>
				
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="urutan">SATUAN</label>
					<div class="controls">
						<input type="pagu" class="span6" id="pagu" name="pagu" value='<?php echo $row->satuan; ?>'>
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