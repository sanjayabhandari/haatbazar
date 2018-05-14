<?php ob_start();?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<?php include('includes/designs/styles.php');?>
</head>
<body>
	<?php include('includes/topmenu.php');
include('includes/topside.php');
include('includes/sidebar.php');
?>
<?php if(isset($_GET['dashboard']))
{
header('location:index.php');

}?>

<?php if(isset($_GET['slider']))
{
include('slider.php');


}?>
<?php if(isset($_GET['profile']))
{
include('profile.php');


}?>
<?php if($_SERVER['REQUEST_METHOD']=='POST')
{

	if(isset($_POST['button_actiona']))
	{
extract($_POST);
		include('class/class.categories.php');
		$category =new Categories();
		$status="active";
		$category->InsertCategory($cat_name,$status);

}
if(isset($_POST['button_action']))
{

	include('class/class.categories.php');
	$category =new Categories();
	$status="deactive";
	$category->InsertCategory($cat_name,$status);

}
}







?>















<?php include('includes/designs/javascripts.php');?>
</body>
</html>
