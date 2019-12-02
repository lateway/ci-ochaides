</div> <!-- div wrap	 -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Sikret.id <?= date('Y'); ?></span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>js/admin.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>sbadmin2/js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>

<script>
	//img upload
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addclass("selected").html(fileName);

	});

	//checkboxes user role
	$('.form-check-input').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({

			url: "<?= base_url('admin/changeaccess'); ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
			}
		});
	});

	$(document).ready(function() {

		$('#sidebarCollapse').on('click', function() {
			$('#sidebar').toggleClass('active');
		});
	});
</script>
</body>

</html>
