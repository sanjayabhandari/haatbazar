					<?php include_once('db.php');
class Categories extends dbConnect{

	/*for showing categories sub categories on admin table*/
public function listallcategories()
{
?>


<table id="data-table" class="table table-striped table-bordered">
		<thead>
				<tr>
						<th width="100px" nowrap>ID</th>
						<th width="100px" nowrap>NAME</th>
						<th width="10px" nowrap>Category</th>
							 <th width="20px" nowrap>SubCategory</th>
									<th width="20px" nowrap>sub-sub-Category</th>
						<th width="200px" nowrap>STATUS</th>
						<th width="100px" nowrap>DATE</th>
						<th>CID</th>
						<th>EDIT</th>
								<th>DELETE</th>

				</tr>
		</thead>
		<tbody >

                                        <?php /*<th>s.id</th>
                                       // <th>Sub category</th>
                                       th>s-sid</th>
                                        //<th>S-sub category</th>*/




$sql="SELECT * from categories";
 $query=mysqli_query($this->db,$sql);
 while($row=mysqli_fetch_array($query))
 {
 	$cid=$row['id'];
 	?>


                                    <tr class="odd gradeX">
                                        <td class="last_name" data-id1="<?php echo$row['id'];?>" >  <?php echo$row['id'];?></td>
                                        <td class="last_name" data-id2="<?php echo$row['id'];?>" ><?php echo$row['name'];?></td>
																				 <td>c1<i class="fa fa-2x fa-check" style="color:green;"><td>
																					 <td></td>
                                        <td  data-id3="<?php echo$row['id'];?>" ><?php echo$row['status'];?></td>
                                           <td  data-id4="<?php echo$row['id'];?>" ><?php echo$row['date'];?></td>
                                           <td> </td>
<td>	<button type="button" name="update" data-id0="<?php echo$row['id'];?>" class="btn btn-xs btn-success update">EDIT</button></td>
																					 <td><button type="button"  data-id3="<?php echo$row['id'];?>" class="btn btn-xs btn-danger delete">DELETE</button></td>


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
<td>c2<i class="fa fa-2x fa-check" style="color:yellow;"></td>
<td><?php echo$row1['cstatus'];?></td>
	 <td></td>
	 	 <td></td>

<td><?php echo$row1['cid'];?></td>
<td>	<button type="button" class="btn btn-xs btn-success">EDIT</button></td>
<td><button type="button"  data-iid3="<?php echo$row1["id"];?>" class="btn btn-xs btn-danger delete">DELETE</button></td>


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
<td>c3 <i class="fa fa-2x fa-check-circle-o" style="color:red;"></i></td>
<td><?php echo$row2['cstatus'];?></td>
<td> </td>

<td><?php echo$row2['cid'];?></td>
<td>	<button type="button" class="btn btn-xs btn-success">EDIT</button></td>
<td><button type="button" data-iid3="<?php echo$row2["id"]?>" class="btn btn-xs btn-danger delete">DELETE</button></td>

</tr>

<?php
}


}


}?>
</tbody>
</table>
<?php



}
/* END ------for showing categories sub categories on admin table*/


/*for showing  sub categories only on modal on admin table*/
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
/*for showing sub sub categories on admin table*/
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
/* END -----for showing SUB sub categories on admin table*/


/*for inserting categories on admin table*/
public function InsertCategory($cat_name,$status)
{
$sql7="Insert into categories set  name='$cat_name' ,status='$status'";
$query7=mysqli_query($this->db,$sql7);
if($query7){




	echo"hello";
}
}


/*for showing sub sub categories on admin table*/
public function Deletecategory($id)
{
$sql8="DELETE FROM categories where id='$id'";
$query8=mysqli_query($this->db,$sql8);
if($query8)
{

echo"Category deleted";

}
}

public function checkcat()
{
	?>


		<?php
$checkcat="SELECT * FROM categories WHERE status='1'  ";
$check=mysqli_query($this->db,$checkcat);
$count=mysqli_num_rows($check);
/*if (($count) ==0 )
{
	echo'<input type="text" name="cat_name" id="categoryname" class="form-control" />';


}
else{
	*/?>

		<?php
while($roww=mysqli_fetch_array($check))
{
?>
<option value="<?php echo$roww['id']?>"> <?php echo$roww['name']?></option>
<?php }
?>


<?php
//}
}

/*for showing categories on select admin table*/
public function selectallcatgories()

{
	?>	 <option value="">Select Category</option>
	<?php
	$country = '';
	$query = "SELECT * FROM categories GROUP BY id ORDER BY id ASC";
	$result = mysqli_query($this->db, $query);
	while($row = mysqli_fetch_array($result))
	{
	 $country .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
	}
	echo$country;
}
/* end -----for showing categories on select admin table*/

public function selectsubsubcat()
{

	$output = '';
  if($_POST["action"] == "category")
  {
   $query = "SELECT * FROM subcategory WHERE cid = '".$_POST["query"]."' GROUP BY id";
   $result = mysqli_query($this->db, $query);
   $output .= '<option value="">Select Sub-Category</option>';
   while($row14 = mysqli_fetch_array($result))
   {
    $output .= '<option value="'.$row14["id"].'">'.$row14["cname"].'</option>';
   }
  }
  if($_POST["action"] == "subcategory")
  {
   $query = "SELECT * FROM subcategory WHERE cid = '".$_POST["query"]."'";
   $result = mysqli_query($this->db, $query);
   $output .= '<option value="">Select Sub-Sub-Category</option>';
   while($row = mysqli_fetch_array($result))
   {
    $output .= '<option value="'.$row["id"].'">'.$row["cname"].'</option>';
   }
  }
  echo $output;
	}


public function edit($id,$text,$column_name)
{

$sql = "UPDATE categories SET ".$column_name."='".$text."' WHERE id='".$id."'";
if(mysqli_query($this->db, $sql))
{
	echo 'CATEGORY Updated';
}
else{
	$sql9 = "UPDATE SUBCATEGOR SET ".$column_name."='".$text."' WHERE id='".$id."'";

if(mysqli_query($this->db, $sql9))
{
echo 'SUB-CATEGORY Updated';


}

}
}

public function fetchsingle($id)
{
 $output = array();
	$sql10="SELECT * FROM categories WHERE id ='$id' LIMIT 1";
	$query10=mysqli_query($this->db,$sql10);
	$row10=mysqli_fetch_array($query10);



foreach($row10 as $row11)
 {
  $output["name"] = $row11["name"];
  $output["status"] = $row11["status"];


 }
 echo json_encode($output);




	}
	public function Deletesubcategory($cid)
	{
$sql12="SELECT * FROM subcategory where cid='$cid'";
$query12=mysqli_query($this->db,$sql12);
while($row12=mysqli_fetch_array($query12))
{
$id=$row12['id'];
$sql13="DELETE from subcategory where id='$cid'";
$query13=mysqli_query($this->db,$sql13);
}
$sql14="DELETE from subcategory where id='$cid'";
$query14=mysqli_query($this->db,$sql14);
if($query14)
{
	echo"hello";
}




	}

}


?>
