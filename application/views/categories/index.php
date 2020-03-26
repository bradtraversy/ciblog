<div class="row">
  	<div class="col-md-6 mx-auto">
		<h4><?= $title ?></h4>
		<ul class="list-group">
		<?php foreach($categories as $category) : ?>
			<li class="list-group-item d-flex justify-content-between align-items-center" style="height: 70px">
				<a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
				<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
					<?php echo form_open("categories/delete/".$category['id']); ?>
						<input type="submit" class="btn btn-danger" value="X">
					<?php echo form_close(); ?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>