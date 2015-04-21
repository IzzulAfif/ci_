<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Program</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">

					<table class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>
									Uraian
								</th>
								<th>
									RPJM
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($program as $key => $value) {
							?>
							<tr>
								<td>
									<?php echo $value->uraian; ?>
								</td>
								<td>
									<?php echo $value->rpjm; ?>
								</td>
							</tr>
							<?php } ?>
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
			<h3> Tujuan Program</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
				<?php $config = array('class'=>'form-horizontal', 'id'=>'formAddTujuan'); echo form_open('program_c/createTujuan', $config);?>
					<table class="table table-striped table-bordered table-hover table-full-width">
						<thead>
							<tr>
								<th>
									No
								</th>
								<th>
									Uraian
								</th>
								<th>
									Tahun
								</th>
								</th>
							</tr>
						</thead>
						<tbody>
							<input type="hidden" name="program" value="<?php echo $idTujuan;?>">
							<?php
							$no = 0;
							for($no ; $no<10 ; $no++) {
							?>
							<tr>
								<td width="5%">
									<?php echo ($no+1); ?>
								</td>
								<td>
									<textarea class="span8" rows="5" name="uraian[]"></textarea>
								</td>
								<td width="10%">
									<input class="span2" name="tahun[]">
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="span12">
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
