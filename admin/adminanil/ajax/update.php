<?php $con= new mysqli("localhost","root","","haatbazar");

$id=$_POST['pid'];
$name=$_POST['name'];
$image=mysqli_real_escape_string($con,$_POST['image']);
$status=mysqli_real_escape_string($con,$_POST['status']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$subc=mysqli_real_escape_string($con,$_POST['subc']);
$ssubc=mysqli_real_escape_string($con,$_POST['ssubc']);

$sql1="UPDATE products set pname='$name',pimage='$image',pstatus='$status',pprice='$price',psid='$subc',pssid='$ssubc' where pid='$id'";
$query1=mysqli_query($con,$sql1);
if($query1)
{
echo"hello";
}
?>
