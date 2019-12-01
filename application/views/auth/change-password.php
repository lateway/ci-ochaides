<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Forgot Password</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Play:400,700&display=swap&subset=cyrillic' rel='stylesheet' />

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-lg-7">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900">Change your password for </h1>
										<h5 class="mb-4"><?= $this->session->userdata('reset_email') ?></h5>
									</div>

									<?= $this->session->flashdata('message'); ?>

									<form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password1" placeholder="Enter New password..." name="password1">
											<?= form_error('password1', '<small class="text-danger">', '</small>') ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat new password..." name="password2">
											<?= form_error('password2', '<small class="text-danger">', '</small>') ?>
										</div>

										<button type="submit" class="btn btn-primary btn-user btn-block">
											Change password
										</button>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
