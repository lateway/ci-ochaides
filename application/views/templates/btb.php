<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">

	<a class="navbar-brand" href="<?= base_url('blog'); ?>">Late <i class="fas fa-blog"></i>log</small></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fas fa-bars"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url('blog'); ?>"><i class="fas fa-home fa-fw"></i><span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					SITE
				</a>
				<div class="dropdown-menu mt-3" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?= base_url('home'); ?>">Web</a>
					<a class="dropdown-item" href="<?= base_url('blog'); ?>"><i class="fas fa-blog"></i> Blog</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
		</ul>

		<form action="" method="post" name="search" id="search">
			<div class="btn-group" role="group" aria-label="Basic example">
				<input class="form-control form-control-sm shadow-sm" type="text" placeholder="search">
				<span class="btn btn-outline-primary btn-sm shadow-sm" name="search" id="search"><i class="fas fa-search"></i></span>
			</div>
		</form>

		<div class="dropdown">
			<i class="fas fa-ellipsis-v fa-lg pl-3" data-toggle="dropdown"></i>
			<div class="dropdown-menu dropdown-menu-right mt-4" aria-labelledby="dropdownMenu2">

				<small><a class="dropdown-item" type="button" ref="<?= base_url('auth'); ?>"><i class="fas fa-user-tie"></i> About</a></small>
				<small><a class="dropdown-item" type="button" href="<?= base_url('auth'); ?>"><i class="fas fa-user-secret"></i> Privacy</a></small>
				<small><a class="dropdown-item" type="button" href="<?= base_url('auth'); ?>"><i class="fas fa-exclamation-circle"></i> Disclaimer</a></small>

				<hr>

				<small><a class="dropdown-item" type="button" href="<?= base_url('auth'); ?>"><i class="fas fa-sign-in-alt fa-fw text-primary"></i> Sign In</a></small>
				<small><a class="dropdown-item" type="button" href="<?= base_url('auth'); ?>"><i class="fas fa-sign-out-alt fa-fw text-danger"></i> Sign Out</a></small>
			</div>
		</div>
	</div>

</nav>
