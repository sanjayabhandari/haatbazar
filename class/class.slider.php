					<?php include_once('db.php');
class Slider extends dbConnect{


public function showslider()


{
?>
<ul class="slides" ><?php 

 $sql="SELECT * from slider";
 $query=mysqli_query($this->db,$sql);
 $count=mysqli_num_rows($query);
 while($row=mysqli_fetch_array($query))
 {
$desctop=$row['slidedesctop'];
$desc=$row['slidedes'];
$desc1=$row['slidedesc1'];
$offer=$row['slideoffer'];

?>

								<li>
									<img src="admin/admincontrol/file/files/<?php echo$row['slide_image'];?>" alt="" data-custom-thumb="admin/admincontrol/file/files/<?php echo$row['slide_image'];?>"
									style="height:400px;">
									
										<section class="slide_caption_2 t_align_c d_xs_none">
											<?php if($desctop!="")
									{?>
										<div class="f_size_large tt_uppercase slider_title_3 scheme_color"><?phpecho$desctop?></div>	<?php } ?>
												<?php if($desc!="")
									{?>
										<hr class="slider_divider type_2 m_bottom_5 d_inline_b">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_65 m_sm_bottom_20"><b><span class="scheme_color"><?php echo$desc;?> </span><br><span class="color_dark"><?phpecho$desc1?></span></b></div><?php }?>
											<?php if($offer!="")
											{?>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover"><?php echo$offer;?></a><?php }?>
									</section>
							
								</li>
								<?php 
				
						
						
						}
						
							'</ul>';
						
					}


				}

				?>