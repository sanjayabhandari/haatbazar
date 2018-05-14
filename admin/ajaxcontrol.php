<?php if(isset($_POST["action"]))
{
	 if($_POST["action"] == "fetch")  
	{
		
include('class/class.categories.php');
$category =new Categories();
$category->listallcategories();


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