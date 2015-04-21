<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Tambah Data</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddProgram'); echo form_open('program_c/createProgram', $config);?>
			<div class="modal-body">

			<fieldset>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="uraian">Uraian</label>
					<div class="controls">
						<textarea class="span6" rows="5" name="uraian"></textarea>
					</div>			
				</div>
			</div>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="rpjm">RPJM</label>
					<div class="controls">
						<select class="span1" name="rpjm">
							<option>-Pilih-</option>
							<?php
							foreach ($rpjm as $key => $value) {
								# code...
								echo "<option value='".$value->tahunawal."'>".$value->tahunawal."</option>";
							}
							?>
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