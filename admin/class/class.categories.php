					<?php include_once('db.php');
class Categories extends dbConnect{
public function listallcategories()
{
?>

                                        <?php /*<th>s.id</th>
                                       // <th>Sub category</th>
                                       th>s-sid</th>
                                        //<th>S-sub category</th>*/?>



<?php

$sql="SELECT * from categories";
 $query=mysqli_query($this->db,$sql);
 while($row=mysqli_fetch_array($query))
 {
 	$cid=$row['id'];
 	?>


                                    <tr class="odd gradeX">
                                        <td editable>  <?php echo$row['id'];?></td>
                                        <td><?php echo$row['name'];?></td>
																				 <td><i class="fa fa-2x fa-check" style="color:green;"><td>
																					 <td></td>
                                        <td><?php echo$row['status'];?></td>
                                           <td><?php echo$row['date'];?></td>
                                           <td> </td>


</tr>

 <?php

$sql1="SELECT * from subcategory where cid='$cid'";
$query1=mysqli_query($this->db,$sql1);
while($row1=mysqli_fetch_array($query1))
{

$id1=$row1['id'];
$id2=$row1['cid'];
?>
<tr class="odd gradeX">
<td > <?php echo$row1['id'];?></td>
<td></i><?php echo$row1['cname'];?></td>
	 <td></td>
<td><i class="fa fa-2x fa-check" style="color:yellow;"></td>
<td><?php echo$row1['cstatus'];?></td>
	 <td></td>
	 	 <td></td>

<td><?php echo$row1['cid'];?></td>
</tr>
<?php
$sql2="SELECT * from subcategory where cid='$id1'";
$query2=mysqli_query($this->db,$sql2);
while($row2=mysqli_fetch_array($query2))
{?>
<tr class="odd gradeX">
<td><?php echo$row2['id'];?> <div></i></td>
<td><?php echo$row2['cname'];?></td>
<td> </td>
<td> </td>
<td> <i class="fa fa-2x fa-check-circle-o" style="color:red;"></i></td>
<td><?php echo$row2['cstatus'];?></td>
<td> </td>

<td><?php echo$row2['cid'];?></td>
</tr>

<?php
}


}

?>

                               <?php  }



}

public function listsubcategory(){
	$sql3="SELECT * from categories";
	 $query3=mysqli_query($this->db,$sql3);
	 while($row3=mysqli_fetch_array($query3))
	 {
$id3=$row3['id'];

 $sql4="SELECT * from subcategory where cid='$id3'";
 $query4=mysqli_query($this->db,$sql4);
 while($row4=mysqli_fetch_array($query4))
 {
	 $id4=$row4['id'];

?>
<tr>
	<td><?php echo $row3['name'];?></td>
		<td>----> <?php echo $row4['cid'];?></td>
	<td>----><?php echo $row4['cname'];?></td>
  	<td><?php echo $row4['id'];?></td>
<tr>
<?php




}








}






}
public function subsubcategory()
{


	$sql6="SELECT * from subcategory";
	 $query6=mysqli_query($this->db,$sql6);
	 while($row6=mysqli_fetch_array($query6))
	 {
		 $id6=$row6['id'];
	$sql5="SELECT * from subcategory where cid='$id6'";
  $query5=mysqli_query($this->db,$sql5);
  while($row5=mysqli_fetch_array($query5))
  {?>
		<tr>
<td><?php echo$row6['cname'];?></td>
<td>---><?php echo$row6['id'];?></td>
<td>---><?php echo$row5['cname'];?></td>
<td><?php echo$row5['id'];?></td>
</tr>
<?php




}
}

}

public function InsertCategory($cat_name,$status)
{
$sql7="Insert into categories set  name='$cat_name' ,status='$status'";
$query7=mysqli_query($this->db,$sql7);
if($query7){
header("location:url.php?slider");

}
}
//public function InsertSubcategory($cname,$cid,)














//}




public function selectallcatgories()

{
$sql8="SELECT * from categories where status='active'";
$query8=mysqli_query($this->db,$sql8);
while($row=mysqli_fetch_array($query8))
{
?>
<option><?php echo$row['name'];?></option>
<?php
}
}



}





?>
