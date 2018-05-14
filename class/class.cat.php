
					<?php include_once('db.php');
class Categories extends dbConnect{


public function showCategories()


{

 $sql="SELECT * from categories";
 $query=mysqli_query($this->db,$sql);
 while($row=mysqli_fetch_array($query))
 {

$cid=$row['id'];



	?>                         <li class="active">



											<a href="#" class="f_size_large scheme_color d_block relative">
												<b><?php echo $row['name'];?> </b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
												<ul>

<?php 

$sql1="SELECT * from subcategory where cid='$cid'";
$query1=mysqli_query($this->db,$sql1);
while($row1=mysqli_fetch_array($query1))
{

$id1=$row1['id'];
$id2=$row1['cid'];

	?>











											<!--second level-->
										
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														<?php  echo$row1['cname'];?><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->



													<ul>
														<?php 
$sql2="SELECT * from subcategory where cid='$id1'";
$query2=mysqli_query($this->db,$sql2);
while($row2=mysqli_fetch_array($query2))
{



?>
														<li><a href="#" class="color_dark d_block"><?php echo$row2['cname'];?></a></li>
														<?php

													} ?>
													</ul>
												</li>
											
										
																		
										<?php 


}
?>
		
											</ul>
										</li>
										<?php



									}



}
}?>



