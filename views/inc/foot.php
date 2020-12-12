<?php defined('BASEPATH') or exit('No direct access allowed'); ?>

		<script src="<?php echo template_url('dist/js/jquery-3.5.1.min.js');?>"></script>
		<script src="<?php echo template_url('dist/js/popper.min.js');?>"></script>
		<script src="<?php echo template_url('dist/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo template_url('dist/js/owl.carousel.min.js');?>"></script>
		<script type="text/javascript">
		$('.rscsc').owlCarousel({
		    loop:true,
		    margin:40,
		    responsiveClass:true,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:1000,
		    responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		});
		$('.rspc').owlCarousel({
		    loop:true,
		    margin:40,
		    responsiveClass:true,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:5000,
		    responsive:{
		        0:{
		            items:1,
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		})
		</script>
	</body>
</html>