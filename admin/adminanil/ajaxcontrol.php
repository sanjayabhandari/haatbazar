<?php if(isset($_POST["action"]))
{
	 if($_POST["action"] == "fetch")
	{

include('class/class.categories.php');
$category =new Categories();
$category->listallcategories();


}
if($_POST["action"] == "fetchsubcat")
{

	include_once('class/class.categories.php');
		$category =new Categories();
		$category->listsubcategory();

}
if($_POST["action"] == "fetchsubsubcat")
{

	include_once('class/class.categories.php');
			$category =new Categories();
			$category->subsubcategory();

}
if($_POST["action"] == "insert")
{
 include('class/class.categories.php');
 $category =new Categories();
 $cat_name=$_POST["cat_name"];
 $status="active";
 $category->InsertCategory($cat_name,$status);



}
if($_POST["action"] == "deletecat")
{
 include('class/class.categories.php');
  extract($_POST);
 $category =new Categories();

  $category->Deletecategory($id);




}
if($_POST["action"] == "cupdate")
{
 include('class/class.categories.php');

 $id = $_POST["cat_id"];

  $category =new Categories();
  $category->fetchsingle($id);

}


}

if(isset($_GET["action"]))
{
if($_GET['action']=="load")
{

include('class/class.categories.php');
$category =new Categories();
$category->listallcategories();




}
}







?>
