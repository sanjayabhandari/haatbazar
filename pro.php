<?php 
/*
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
include('class/class.product.php');
$product= new Product();
$product->products();


}
}
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "categories")  
      {  
include('class/class.categories.php');
$categories= new Categories();
$categories->showCategories();


}
}
*/?>
						<?php include('class/class.slider.php');

							$slider = new Slider();
							$slider->showslider();


?>








