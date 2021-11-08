
	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Cotacto
					</h4>

					<p class="stext-107 cl7 size-201">
						Av. Las Américas Zona 13 <br>
						Tel: (+52) 242424-2424
					</p>

					<div class="p-t-27">
						<a href="https://facebook.com" target="_blanck" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://instagram.com" target="_blanck"  class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>
					</div>
				</div>

			</div>

			<div class="p-t-40">
				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<!-- <?= NOMBRE_EMPESA; ?> | <?= WEB_EMPRESA; ?> | <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
				</p>
			</div>
		</div>
	</footer>
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>
<!--===============================================================================================-->	
	<script src="<?= media() ?>/web/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/web/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/web/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/web/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/web/js/main.js"></script>

</body>
</html>