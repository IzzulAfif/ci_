<div class="span6">
					<div class="control-group">											
						<label class="control-label" for="url">TUJUAN</label>
							<div class="controls">
								<select name="tujuan" class="span6" rows="5">
									<option value=''>PILIH TUJUAN</option>
									<?php 
										foreach($tujuan as $row){ 
											echo "<option value='".$row->id."'>".$row->uraian."</option>";
										}
									?>
								</select>
							</div>			
					</div>
				</div>