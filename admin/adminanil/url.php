<?php ob_start();


?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<?php include('includes/designs/styles.php');
'</head>
<body>';
include('includes/topmenu.php');
include('includes/topside.php');
include('includes/sidebar.php');
if(isset($_GET['logout']))
{


include('pages/logout.php');

}
if(isset($_GET['dashboard']))
{


include('pages/index.php');

}

if(isset($_GET['category']))
{
include('pages/category.php');


}
 if(isset($_GET['profile']))
{
include('pages/profile.php');


}
 if(isset($_GET['product']))
{
include('pages/products.php');


}
if($_SERVER['REQUEST_METHOD']=='POST')
{

	if(isset($_POST['button_actiona']))
	{
extract($_POST);
		include('../class/class.categories.php');
		$category =new Categories();
		$status="active";
		$category->InsertCategory($cat_name,$status);

}
if(isset($_POST['button_action']))
{

	include('../class/class.categories.php');
	$category =new Categories();
	$status="deactive";
	$category->InsertCategory($cat_name,$status);

}
}







?>















<?php include('includes/designs/javascripts.php');?>
</body>
</html>
