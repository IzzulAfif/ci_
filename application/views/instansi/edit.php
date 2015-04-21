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

			<?php $config = array('class'=>'form-horizontal', 'id'=>'formEditUnit'); echo form_open('instansi/proses_edit_instansi', $config);?>
			<div class="modal-body">
			<fieldset>
			<?php foreach($m_instansi as $data){ ?>
			<div class="span6">
				<div class="control-group">											
					<label class="control-label" for="nama">NAMA</label>
					<div class="controls">
						<input type="text" class="span6" id="nama" name="nama" value="<?php echo $data->nama;?>">
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