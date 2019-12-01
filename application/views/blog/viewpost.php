<div class="row mx-auto">
	<div class="col-lg-8">

		<nav aria-label="breadcrumb">
			<!-- Breadcrumbs DONT REMOVE OR DELETE-->
			<ol class="breadcrumb bg-transparent mb-0 pb-0">
				<?php foreach ($this->uri->segments as $segment) : ?>
					<?php
						$url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
						$is_active =  $url == $this->uri->uri_string;
						?>
					<li class="breadcrumb-item <?= $is_active ? 'active' : '' ?>">
						<?php if ($is_active) : ?>
							<?= ucfirst($segment) ?>
						<?php else : ?>
							<a href="<?= site_url($url) ?>"><?= ucfirst($segment) ?></a>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ol>
		</nav>
		<div class="card-body bg-white rounded shadow pt-2 mt-3">
			<h2 class="text-uppercase text-gradient mb-2"><?= $list['post_title']; ?></h2>
			<img class="img-fluid" alt="Responsive image" src="<?= base_url() . 'assets/img/' . $list['post_img']; ?>">
			<div class="clearfix"></div>

			<div class="media-body pl-2 mt-2">
				<?= $list['post_body']; ?>
			</div>
		</div>
		<hr>


	</div>
	<aside id="sidebar" class="col-lg-4 mt-5">

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
