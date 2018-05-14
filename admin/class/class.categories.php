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
                                        <td > <i class="fa fa-2x fa-magnet" style="color:green;"></i> <?php echo$row['id'];?></td>
                                        <td><?php echo$row['name'];?></td>
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
<td><i class="fa fa-2x fa-check" style="color:orange;"></i><?php echo$row1['cname'];?></td>
<td><?php echo$row1['cstatus'];?></td>
<td> </td>
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
<td><?php echo$row2['cstatus'];?></td>
<td> </td>
<td><i class="fa fa-2x fa-check-circle-o" style="color:red;"></i><?php echo$row2['cid'];?></td>
</tr>

<?php
}


}

?>
                                
                               <?php  }
                                    
                        

}
}

