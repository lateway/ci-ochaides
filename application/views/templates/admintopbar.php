<!-- Topbar -->
<nav id="topbar" class="navbar navbar-expand bg-white topbar fixed-top">


	<span class="navbar-brand" href="/">
		<!-- Sidebar Toggle -->
		<div id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
			<i class="fa fa-bars text-black"></i>
		</div>
		<a href="auth">Lateway</a>
	</span>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">SITE</span>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?= base_url('/home') ?>">
					<i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
					WEB
				</a>

				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?= base_url('/blog') ?>">
					<i class="fas fa-blog fa-sm fa-fw mr-2 text-gray-400"></i>
					BLOG
				</a>
			</div>
		</li>

		<div class=" topbar-divider d-none d-sm-block">
		</div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
				<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					My Profile
				</a>

				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>

	</ul>

</nav>
<!-- End of Topbar -->
