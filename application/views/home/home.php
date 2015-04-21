
<div class="span6">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Input Form</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
				<h6 class="bigstats">
					Helloooo ini span 6
				</h6>
				
				<?php $config = array('class'=>'form-horizontal'); echo form_open_multipart('', $config);?>
				<fieldset>

				<div class="control-group">											
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" class="span4 disabled" id="username" value="Example" disabled="">
						<p class="help-block">Your username is for logging in and cannot be changed.</p>
					</div> <!-- /controls -->				
				</div>

				</fieldset>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="span6">
	<div class="widget">
		<div class="widget-header"> <i class="icon-bookmark"></i>
			<h3> Shortcuts Apps</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
				<div class="shortcuts"> 
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-list-alt"></i>
						<span class="shortcut-label">Apps</span> 
					</a>
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-bookmark"></i>
						<span class="shortcut-label">Bookmarks</span> 
					</a>
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-signal"></i> 
						<span class="shortcut-label">Reports</span> 
					</a>
					<a href="javascript:;" class="shortcut"> 
						<i class="shortcut-icon icon-comment"></i>
						<span class="shortcut-label">Comments</span> 
					</a>
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-user"></i>
						<span class="shortcut-label">Users</span> 
					</a>
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-file"></i>
						<span class="shortcut-label">Notes</span> 
					</a>
					<a href="javascript:;" class="shortcut">
						<i class="shortcut-icon icon-picture"></i> 
						<span class="shortcut-label">Photos</span> 
					</a>
					<a href="javascript:;" class="shortcut"> 
						<i class="shortcut-icon icon-tag"></i>
						<span class="shortcut-label">Tags</span> 
					</a> 
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="span12">
	<div class="widget widget-nopad">
		<div class="widget-header"> <i class="icon-list-alt"></i>
			<h3> Today's Stats</h3>
		</div>
		<div class="widget-content">
		<div class="widget big-stats-container">
			<div class="widget-content">
				<h6 class="bigstats">
					Hiii.... <?=$this->session->userdata("nama");?>
				</h6>
				
				<?php $config = array('class'=>'form-horizontal'); echo form_open_multipart('', $config);?>
				<fieldset>

				<div class="control-group">											
					<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input type="text" class="span6 disabled" id="username" value="Example" disabled="">
						<p class="help-block">Your username is for logging in and cannot be changed.</p>
					</div> <!-- /controls -->				
				</div>
				
				</fieldset>
				</form>
				<form class="form-vertical">	
					<fieldset>
						<div class="control-group">
						<label class="control-label">Social Buttons</label>	
						<div class="controls">
							<button class="btn btn-primary" onclick="hello()">Klik mE</button>
						</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function hello(){
    alert('hello')
}

</script>