<div class="row">
	<div class="col-md-6 mx-auto">
		<h4><?= $title ?></h4>
		<br>
		<?php foreach($posts as $post) : ?>
			<h5><?php echo $post['title']; ?></h5>
			<div class="row mb-5">
				<div class="col-md-6">
					<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
				</div>
				<div class="col-md-6">
					<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
				<?php echo character_limiter(strip_tags($post['body']), 20, "..."); ?>
				<br><br>
				<p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
				</div>
			</div>
		<?php endforeach; ?>
		<div class="pagination-links">
				<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>