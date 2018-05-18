<?php include('db.php');
class Admin extends dbConnect{
public function adminLogin($email,$apassword)
{

$email= mysqli_real_escape_string($this->db,$email);
$apassword= mysqli_real_escape_string($this->db,$apassword);
$sql = "SELECT admin_id FROM admins WHERE admin_email='$email' and admin_pass='$apassword'  ";
$result= mysqli_query($this->db,$sql);
$row1 = mysqli_fetch_array($result);
$count_row1 = $result->num_rows;
if ($count_row1 == 1) {
	// header('Location:dashboard.php');
		            // this login var will use for the session thing
	            $_SESSION['login'] = true;
	           $_SESSION['aid'] = $row1['admin_id'];
	           $_SESSION['aname'] = $email;

	            header('Location:url.php?dashboard');
	        }
	        else{
		return false;
    	}





}
 public function adminname()
 {
 	$aid=$_SESSION['aid'];
 
$name="SELECT * from admins where admin_id='$aid'";
$getname=mysqli_query($this->db,$name);
while($fetchname=mysqli_fetch_array($getname))
{


echo $fetchname["admin_name"];
}



 }













public function adminprofile()
{
$id=$_SESSION['aid'];
$sql1="SELECT * from admins where admin_id='$id'";
$result=mysqli_query($this->db,$sql1);
while($row=mysqli_fetch_array($result))
{
	$name=$row['admin_name'];
	$email=$row['admin_email'];
	$contact=$row['admin_contact'];
	$adminjob=$row['admin_job'];
	$image=$row['admin_image'];
	$country=$row['admin_country'];
	$description=$row['admin_about'];
	$facebook=$row['admin_facebook'];
	$twitter=$row['admin_twitter'];
	$linkedon=$row['admin_linkedon'];



	
	
	
	?>



	<BR/>
<div id="livedata">
<div class="card">
  <img src="<?php echo$image;?>" alt="John" style="width:100%">
  <h3><?php echo$name;?></h3>
  <?php echo$country;?>

  <p class="title"><?php echo$adminjob;?></p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
  
    <a href="#" style="margin-right:30px;"><i class=" icon-twitter"></i></a> 
    <a href="#" style="margin-right:30px;"><i class=" icon-linkedin"></i></a>  
    <a href="https://<?php echo$facebook;?>" style="margin-right:30px;"><i class="icon-facebook-sign" ></i></a> 
 </div>
 <p><button class="buttony"><?php echo$description;?></button></p>
 <i class="icon-phone-sign" style="margin-right:10px;"></i><?php echo$contact?>
</div>
</div>
<?php
}
}
}
?>