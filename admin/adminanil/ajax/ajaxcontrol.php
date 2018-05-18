<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST')
{

if(isset($_POST["action"]))
{
	 if($_POST["action"] == "fetch")
	{

include_once('../class/class.categories.php');
$category =new Categories();
$category->listallcategories();


}
if($_POST["action"] == "fetchsubcat")
{

	include_once('../class/class.categories.php');
		$category =new Categories();
		$category->listsubcategory();

}
if($_POST["action"] == "fetchsubsubcat")
{

	include_once('../class/class.categories.php');
			$category =new Categories();
			$category->subsubcategory();

}
if($_POST["action"] == "insert")
{
 include_once('../class/class.categories.php');
 $category =new Categories();
 $cat_name=$_POST["cat_name"];
 $status="1";
 $category->InsertCategory($cat_name,$status);



}
if($_POST["action"] == "checkcat")
{
	include_once('../class/class.categories.php');

  $category =new Categories();

   $category->Deletecategory($id);



}
if($_POST["action"] == "deletecat")
{
		if(isset($_POST['cid']))
	{

 include_once('../class/class.categories.php');
  extract($_POST);
 $category =new Categories();

  $category->Deletesubcategory($cid);

	}
		

	if(isset($_POST['id']))
	{
 include_once('../class/class.categories.php');
  extract($_POST);
 $category =new Categories();

  $category->Deletecategory($id);

}


}
if($_POST["action"] == "cupdate")


{
 include_once('../class/class.categories.php');

 $id = $_POST["cat_id"];

  $category =new Categories();
  $category->fetchsingle($id);

}
if($_POST["action"] == "fetchproduct")
{
	include_once('../class/class.products.php');



   $products =new Products();
   $products->listallproducts();


}
if($_POST["action"] == "upload")
{
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
	include_once('../class/class.products.php');



	$products =new Products();
	$products->Insertproduct($name,$url,$status,$price,$category,$subcategory,$subsubcategory);
}


if($_POST["action"] == "deletepro")
{
 include_once('../class/class.products.php');
  extract($_POST);
	$products =new Products();
	$products->DeleteProduct($id);





}
if($_POST["action"] == "proupdate")
{
if(isset($_POST['pro_id']))
{

include_once('../class/class.products.php');

$id=$_POST['pro_id'];
 $products =new Products();
 $products->EditProduct($id);
}







}
if($_POST["action"] == "insertpro")

{

	include_once('../class/class.products.php');

	 $products =new Products();
	 $products-> updateproducts();
	}
if($_POST["action"] == "selectcat")
{

 include_once('../class/class.categories.php');
	$category = new Categories();
	$category->selectallcatgories();





}



 include_once('../class/class.categories.php');
	$category = new Categories();
	$category->selectsubsubcat();








}





}



if (isset($_POST['submitpro'])) {
 $valid = array('success' => false, 'messages' => array());



$type = explode('.', $_FILES['userImage']['name']);
$type = $type[count($type) - 1];
$url = '../files/' . uniqid(rand()) . '.' . $type;

if(in_array($type, array('gif', 'jpg', 'jpeg', 'png'))) {
  if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
    if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {
extract($_POST);

include_once('../class/class.products.php');



$products =new Products();
$products->Insertproducts($name,$url,$status,$price,$subc,$ssubc);



}
}
}
}

if(isset($_GET["action"]))
{



if($_GET['action']=="load")
{

include_once('../class/class.categories.php');
$category =new Categories();
$category->listallcategories();




}
}







?>
