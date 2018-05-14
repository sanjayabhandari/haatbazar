				<aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30"> 
				<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30" >
						<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
									<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<?php include('class/class.cat.php');
$categories= new Categories();
$categories->showCategories();?>


							<!--widgets-->
								</ul>
								</div>
						
							</figure>
						</aside>
