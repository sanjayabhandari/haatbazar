
<?php
if($_POST) {
 $valid = array('success' => false, 'messages' => array());


  $url = $_FILES["userImage"]["name"];
/*$type = explode('.', $_FILES['userImage']['name']);
$type = $type[count($type) - 1];
$url = '../files/' . uniqid(rand()) . '.' . $type;
$location= '../../files/'. uniqid(rand()) . '.' . $type;
if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
  if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {
      move_uploaded_file($_FILES['userImage']['tmp_name'], $location);*/
extract($_POST);
move_uploaded_file($_FILES["userImage"]["tmp_name"],"../files/".$url);
include('../class/class.products.php');



$products =new Products();
	$products->Insertproduct($name,$url,$status,$price,$category,$subcategory,$subsubcategory);




}
//}
//}


//}
?>
