<?php echo validation_errors('<div class="alert alert-danger col-md-4 mx-auto">', '</div>'); ?>

<?php echo form_open_multipart('categories/create'); ?>
<div class="row">
	<div class="col-md-6 mx-auto">
		<h4><?= $title ?></h4>
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" placeholder="Enter name">
		</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
<?php echo form_close(); ?>