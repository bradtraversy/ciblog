<?php echo validation_errors('<div class="alert alert-danger col-md-4 mx-auto">', '</div>'); ?>
<?php echo form_open('users/login'); ?>
	<div class="row">
  		<div class="col-md-4 mx-auto">
			<h4 class="text-center"><?= $title ?></h4>
			<!-- username -->
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Enter username">
			</div>
			<!-- password -->
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Enter Password">
			</div>
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>