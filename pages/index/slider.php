	<!--slider with banners-->
			<section class="container">
				<div class="row clearfix">
					<!--slider-->
					<div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
						<div class="flexslider animate_ftr long">
							<?php include('class/class.slider.php');

							$slider = new Slider();
							$slider->showslider();


?>
						</div>
					</div>
					<!--banners-->
					<div class="col-lg-3 col-md-3 col-sm-3 t_xs_align_c s_banners">
						<a href="#" class="d_block d_xs_inline_b m_bottom_20 animate_ftr">
							<img src="images/banner_img_7.jpg" alt="">
						</a>
						<a href="#" class="d_block d_xs_inline_b m_xs_left_5 animate_ftr m_mxs_left_0">
							<img src="images/banner_img_8.jpg" alt="">
						</a>
					</div>
				</div>
			</section>