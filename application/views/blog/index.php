<div class="left ">
	<ul>
		<a href="#">
			<li class="item-menu">
				<i class="fas fa-phone fa-fw fa-lg text-bluesky"></i>
				<span class="menu">Contact</span>
			</li>
		</a>
		<a href="#">
			<li class="item-menu">
				<i class="fas fa-user-secret fa-fw fa-lg text-bluesea"></i>
				<span class="menu">Privacy</span>
			</li>
		</a>
		<a href="#">
			<li class="item-menu">
				<i class="fas fa-exclamation-triangle fa-fw fa-lg text-pink"></i>
				<span class="menu">Disclaimer</span>
			</li>
		</a>
		<a href="#" class="mt-auto">
			<li class="item-menu">
				<i class="fas fa-sign-in-alt fa-fw fa-lg text-green"></i>
				<span class="menu">Login</span>
			</li>
		</a>
		<a href="#">
			<li class="item-menu">
				<i class="fas fa-sign-out-alt fa-fw fa-lg text-orange"></i>
				<span class="menu">Sign Up</span>
			</li>
		</a>
	</ul>
</div> <!-- end left -->
<div class="row mx-auto">

	<div class="col-lg-8 p-5 ">
		<nav aria-label="breadcrumb">
			<!-- Breadcrumbs DONT REMOVE OR DELETE-->
			<ol class="breadcrumb">
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
		<br><br>


		<div class="container">
			<div class="card w-100 shadow-sm">
				<div class="card-header text-gradient">
					<h3 class="text-uppercase">LATEST POST</h3>
				</div>
				<!-- ARTIKEL POST -->
				<div class="card-body">
					<?php
					function limit_words($string, $word_limit)
					{
						$words = explode(" ", $string);
						return implode(" ", array_splice($words, 0, $word_limit));
					}
					foreach ($list->result() as $l) : ?>
						<div class="post mt-3 shadow">
							<div class="post-img mr-2">
								<a href="#">
									<img src="<?= base_url() . 'assets/img/' . $l->post_img; ?>" alt="img-post">
									<div class="post-date">
										<span class="date">10</span>
										<span class="month">jan</span>
									</div>
								</a>
							</div>
							<div class="post-review">
								<h3 class="post-title text-capitalize"><a href="<?= base_url('blog/view/') . $l->post_slug; ?>"><?= $l->post_title; ?></a></h3>
								<ul class="post-bar">
									<li><i class="fa fa-user"></i><a href="#">Admin</a></li>
									<li><i class="fa fa-comment"></i><a href="#">5</a></li>
								</ul>
								<p class="post-description"><small><?= limit_words($l->post_body, 10); ?></small>
									<br><br><a href="<?= base_url('blog/view/') . $l->post_slug; ?>"><button class="badge-primary rounded">Read More</button></a>
								</p>
							</div>
						</div>
					<?php endforeach; ?>

				</div>


			</div>

		</div>

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
