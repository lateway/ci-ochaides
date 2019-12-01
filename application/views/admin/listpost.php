<div class="row mx-auto">

	<div class="col mt-lg-4">
		<div class="card">
			<div class="card-header text-center text-gradient">
				<h3 class="text-uppercase">MY LIST POST</h3>
			</div>

			<div class="card-body">
				<?php
				function limit_words($string, $word_limit)
				{
					$words = explode(" ", $string);
					return implode(" ", array_splice($words, 0, $word_limit));
				}
				foreach ($listpost->result() as $l) : ?>
					<div class="media">
						<img src="<?= base_url() . 'assets/img/' . $l->post_img; ?>" style="width:150px;height:100px;" class="mt-lg-2">
						<div class="media-body pl-2">
							<h5 class="text-uppercase text-gradient"><?= $l->post_title; ?></h5>
							<small>
								<?= limit_words($l->post_body, 15); ?><a href="<?= base_url() . 'blog/view/' . $l->post_slug; ?>"><br><strong>Read more >></strong></a>
							</small>
						</div>
					</div>
					<hr>
				<?php endforeach; ?>
			</div>
		</div>

	</div>


</div>
<aside id="sidebar" class="col-lg-4 mt-4">
	<div class="card shadow-sm">
		<div class="card-header text-center text-gradient">
			POPULAR POST
		</div>
		<div class="card-body">
			<div class="media">
				<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="mr-3 img-thumbnail-sm mt-2" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Media heading</h5>
					<small>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
					</small>
				</div>
			</div>
			<hr>
			<div class="media">
				<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="mr-3 img-thumbnail-sm mt-2" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Media heading</h5>
					<small>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
					</small>
				</div>
			</div>
			<hr>
			<div class="media">
				<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="mr-3 img-thumbnail-sm mt-2" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Media heading</h5>
					<small>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
					</small>
				</div>
			</div>
			<hr>
			<div class="media">
				<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="mr-3 img-thumbnail-sm mt-2" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Media heading</h5>
					<small>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
					</small>
				</div>
			</div>
			<hr>
			<div class="media">
				<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="mr-3 img-thumbnail-sm mt-2" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Media heading</h5>
					<small>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
					</small>
				</div>
			</div>
		</div>
	</div>



	<div class="card shadow mx-auto p-2 mt-4">
		<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="card-img-top" alt="img">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="btn btn-primary btn-radius btn-sm">Go somewhere</a>
		</div>
	</div>

	<div class="card shadow mx-auto p-2 mt-4">
		<img src="https://1.bp.blogspot.com/-J2kKz_4bBI4/XXkGBRyFxSI/AAAAAAAACGI/w289Q8CjWEEg651ww_0CIyn4_84nDwzxQCLcBGAsYHQ/s320/geeks-2894621_1920.jpg" class="card-img-top" alt="img">
		<div class="card-body">
			<h5 class="card-title">Card title</h5>
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="#" class="btn btn-primary btn-radius btn-sm">Go somewhere</a>
		</div>
	</div>
</aside>


</div> <!-- row -->
