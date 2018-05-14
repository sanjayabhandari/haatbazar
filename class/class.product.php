					<?php include_once('db.php');
class Product extends dbConnect{


public function Popupimage($id)

{
	


$query0 = "SELECT * FROM tbl_product where id=$id  ";
			$result0 = mysqli_query($this->db,$query0);
			
		while($row0=mysqli_fetch_array($result0))
		{
$name=$row0['name'];


	?>

	
			
	

			
			<section class="popup r_corners shadow" <?php /*style="
	background:#fff;
	padding:1px 2px 3px;
	position:absolute;
	top:0%;
	left:20%;
	width:890px;
	overflow:hidden;"*/?>>
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large" <?php /*style="position:absolute;top:20px;right:16px;"*/?>><i class="fa fa-times" ></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar"> <!--left popup column-->
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="pages/images/product_images/<?php echo $row0["image"]; ?>" class="tr_all_hover" alt="" style="height:200px;">
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
									<li data-src="images/quick_view_img_1.jpg"  style="width:20x;"><img src="images/quick_view_img_4.jpg" alt="" style="width:20x;"></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""  style="width:20x;"></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle"><?php echo$id;?></div>
							<div class="d_inline_middle m_left_5">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class="f_right half_column">
							<!--description-->
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium"><?php echo$name;?></a></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li>
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
								</ul>
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Manufacturer:</td>
									<td><a href="#" class="color_dark">Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class="color_green">in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>
							<h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Product Length:</td>
									<td><span class="color_dark">10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
								<s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
							</div>
							<table class="description_table type_2 m_bottom_15">
								<tr>
									<td class="v_align_m">Size:</td>
									<td class="v_align_m">
										<div class="custom_select f_size_medium relative d_inline_middle">
											<div class="select_title r_corners relative color_dark">s</div>
											<ul class="select_list d_none"></ul>
											<select name="product_name">
												<option value="s">s</option>
												<option value="m">m</option>
												<option value="l">l</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class="v_align_m">Quantity:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>
								</tr>
							</table>
							<div class="clearfix m_bottom_15">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>

	
		<?php }
	}


			public function products()
			{

			$query = "SELECT * FROM tbl_product   ";
			$result0 = mysqli_query($this->db,$query);
			
			
		while($row=mysqli_fetch_array($result0))
				
			{
				?>


	<div class="popup_wrap d_none " id="quick_view_product<?php echo $row['id'];?>"  style="position: fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background:rgba(0,0,0,.5);
	z-index:200;
	">
	<?php 

		$id=$row['id'];
	 $this->Popupimage($id);
   
	?>
	</div>
	<?php 
			

			?>



								<div class="product_item hit w_xs_full">
									<figure class="r_corners photoframe animate_ftb type_2 t_align_c tr_all_hover shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											<!--hot product-->
											<span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
											<img src="pages/images/product_images/<?php echo $row["image"]; ?>" class="tr_all_hover" alt="" style="height:150px;">
											<span role="button" data-popup="#quick_view_product<?php echo $row['id']; ?>" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>s
										<!--description and price of product-->
										<figcaption>

								
											<h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo $row["name"]; ?></a></h5>
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15"><?php echo $row["price"]; ?></p>

											<form method="post">

                                              
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                       <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
                        <input type="hidden" name="hidden_image" value="<?php echo $row["image"]; ?>" />
                        <input type="text" name="quantity" value="1" class="form-control" style="margin-bottom:20px;" />
											<button name="add_to_cart" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15 cart">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</form>
										</figcaption>
									</figure>
								</div>

<?php
							
									





								 } 

							}
						}
						

	?>