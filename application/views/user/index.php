<!-- Begin Page Content -->
<div class="container-fluid pt-3 pl-3">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 img">
			<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" class="img-rounded">
		</div>
		<div class="col-md-6 details">
			<blockquote>
				<h5><?= $user['name']; ?></h5>
				<small><cite title="Source Title">Jakarta, Indonesia <i class="icon-map-marker"></i></cite></small>
			</blockquote>
			<p>
				<?= $user['email']; ?> <br>
				www.sikret.id <br>
				Member since <?= date('d, F, Y', $user['date_created']); ?>
			</p>
			<hr>
			<div class="col">
				IG : <a href="" class="justify-content-end"></a>
			</div>
			<div class="col">
				FB : <a href="" class="justify-content-end"></a>
			</div>
			<div class="col">
				TW : <a href="" class="justify-content-end"></a>
			</div>

		</div>
	</div>

</div> <!-- IMPORTANT, DONT DELETE OR MOVE POSITION -->
