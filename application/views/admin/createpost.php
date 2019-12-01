<div class="container">

	<h3 class="text-center">---<?= $title; ?>---</h3>
	<hr class="col-md-8 col-md-offset-2">
	<form action="<?= base_url('admin/simpan_post'); ?>" method="post" enctype="multipart/form-data">
		<input type="text" name="posttitle" class="form-control col-md-5" placeholder="Title" required /><br />
		<input type="text" name="postlabel" class="form-control col-md-3" placeholder="Label" required /><br />
		<textarea id="ckeditor" name="postbody" class="ckeditor" required></textarea><br />
		Upload Image :<br>
		<input type="file" name="postimg" required>
		<span><button class="btn btn-primary btn-radius float-right" type="submit">POST</button></span>
	</form>
	</hr>
</div>
