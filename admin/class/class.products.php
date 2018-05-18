<?php include_once('db.php');
class Products extends dbConnect{

/*for showing product info on admin table*/
public function listallproducts()
{
  $sql="SELECT * from products ";
   $query=mysqli_query($this->db,$sql);
   while($row=mysqli_fetch_array($query))
   {
   	$pid=$row['pid'];
    $pname=$row['pname'];
    $pimage=$row['pimage'];
    $pstatus=$row['pstatus'];
    $pprice=$row['pprice'];
    $psid=$row['psid'];
    $pssid=$row['pssid'];
   	?>
      <tr class="odd gradeX">
<td><?php echo$pid;?></td>
<td><?php echo$pname;?></td>
<?php if($pimage!=="")
{?>
<td><img src="files/<?php echo$pimage;?>" style="width:100px; height:100px;"></td>
<?php }?>
<td><?php echo$pstatus;?></td>
<td><?php echo$pprice;?></td>
<td><?php echo$psid;?></td>
<td><?php echo$pssid;?></td>
<td>	<button type="button"  proid="<?php echo$row['pid'];?>" class="btn btn-xs btn-success updateproducts">EDIT</button></td>
<td><button type="button"  data-id4="<?php echo$row['pid'];?>" class="btn btn-xs btn-danger deletepro">DELETE</button></td>




      </tr>
<?php
}
}

public function Insertproduct($name,$url,$status,$price,$category,$subcategory,$subsubcategory)
{

$sql1="INSERT INTO products set pname='$name',pimage='$url',pstatus='$status',pprice='$price',pccid='$category',psid='$subcategory',pssid='$subsubcategory'";
$query1=mysqli_query($this->db,$sql1);
if($query1)
{
  $valid['success'] = true;
      $valid['messages'] = "Successfully Uploaded";
    }
    else {
      $valid['success'] = false;
      $valid['messages'] = "Error while uploading";
    }






}

public function DeleteProduct($id)
{
$sql2="SELECT * FROM products where pid='$id'";
$query2=mysqli_query($this->db,$sql2);
while($row1=mysqli_fetch_array($query2))
{
$image=$row1['pimage'];
  $file_path = '../files/' . $image;
 if(unlink($file_path))
 {


  $sql3="DELETE FROM products where pid='$id'";
  $query3=mysqli_query($this->db,$sql3);
  if($query3)
  {

  echo"Product deleted";
}}
else{

'<script>alert("not deleted")</script>';


}
  }




}

public function updateproducts()
{
    $id=$_POST['pid'];
  $name=$_POST['name'];
  $image=mysqli_real_escape_string($this->db,$_POST['image']);
  $status=mysqli_real_escape_string($this->db,$_POST['status']);
  $price=mysqli_real_escape_string($this->db,$_POST['price']);
  $subc=mysqli_real_escape_string($this->db,$_POST['subc']);
  $ssubc=mysqli_real_escape_string($this->db,$_POST['ssubc']);

$sql1="UPDATE products set pname='$name',pimage='$image',pstatus='$status',pprice='$price',psid='$subc',pssid='$ssubc' where pid='$id'";
$query1=mysqli_query($this->db,$sql1);

}

public function EditProduct($id)
{
$sql3="SELECT * FROM products where pid='$id'";
$result3=mysqli_query($this->db,$sql3);
$row3 = mysqli_fetch_array($result3);

echo json_encode($row3);
}








}

















?>
