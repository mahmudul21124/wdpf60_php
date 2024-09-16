<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/testimonial.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.inview.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.menu-aim.js"></script>
	<script src="js/custom_II.js"></script>
	<!-- custom js-->
	<script>
		$(".edu_coll_slider_tabs .nav-tabs a").click(function() {
		          var position = $(this).parent().position();
		          var width = $(this).parent().width();
		            $(".slider").css({"left":+ position.left,"width":width});
		        });
		        var actWidth = $(".edu_coll_slider_tabs .nav-tabs .active").width();
		        var actPosition = $(".edu_coll_slider_tabs .nav-tabs .active").position();
		        $(".slider").css({"left":+ actPosition.left,"width": actWidth});
				
				// collection Slider
		var swiper = new Swiper('.swiper-container', {
	      effect: 'coverflow',
	      loop: !0, 
	      mode:'horizontal',
	      grabCursor: true,
	      centeredSlides: !0,
	      parallax: !0,
	      grabCursor: true,
	      effect: 'coverflow',
	      slidesPerView: 'auto',
	      coverflowEffect: {
	        rotate:  20, 
	        stretch: 0,
	        depth: 90,
	        modifier: 1,
	        slideShadows : !1,
	      },
	      pagination: {
	        el: '.swiper-pagination',
	        clickable: !0
	      },
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
	</script>