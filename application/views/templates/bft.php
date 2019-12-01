<!--footer starts from here-->
<footer class="footer mt-5 bg-dark text-white">
	<div class="container bottom_border">
		<div class="row">
			<div class=" col-sm-4 col-md col-sm-4  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
				<!--headin5_amrc-->
				<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
				<p><i class="fa fa-phone"></i> +91-9999878398 </p>
				<p><i class="fa fa fa-envelope"></i> info@example.com </p>


			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="http://webenlance.com">Image Rectoucing</a></li>
					<li><a href="http://webenlance.com">Clipping Path</a></li>
					<li><a href="http://webenlance.com">Hollow Man Montage</a></li>
					<li><a href="http://webenlance.com">Ebay & Amazon</a></li>
					<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
					<li><a href="http://webenlance.com">Image Cropping</a></li>
				</ul>
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
					<li><a href="http://webenlance.com">Remove Background</a></li>
					<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
					<li><a href="http://webenlance.com">Logo Design</a></li>
					<li><a href="http://webenlance.com">Vectorization</a></li>
					<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
					<li><a href="http://webenlance.com">Image Cropping</a></li>
				</ul>
				<!--footer_ul_amrc ends here-->
			</div>


			<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
				<!--headin5_amrc ends here-->

				<ul class="footer_ul2_amrc">
					<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
						<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
					</li>
					<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
						<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
					</li>
					<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
						<p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p>
					</li>
				</ul>
				<!--footer_ul2_amrc ends here-->
			</div>
		</div>
	</div>
</footer><!-- End of Footer -->
<div class="endfoot text-center text-primary">
	<span>Copyright &copy; Lateway.id <?= date('Y'); ?></span>
</div>
</div> <!-- id wrap DONT MOVE OR DELETE THIS-->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>jquery/jquery.js"></script>
<script src="<?= base_url('assets/'); ?>bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	$(function() {
		// Fungsi untuk mengganti textarea dengan ckeditor style
		CKEDITOR.replace('editor1', {
			extraPlugins: 'syntaxhighlight',
			toolbar: [
				['Source'],
				['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image'],
			]
		});

	});
</script>

</body>

</html>
