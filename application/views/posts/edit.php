<?php echo validation_errors('<div class="alert alert-danger col-md-4 mx-auto">', '</div>'); ?>

<?php echo form_open('posts/update'); ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <h4><?= $title ?></h4>
  	<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
      <label>Body</label>
      <textarea id="editor1" class="form-control" name="body" placeholder="Add Body"><?php echo $post['body']; ?></textarea>
    </div>
    <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
<?php echo form_close(); ?>