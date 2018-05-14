

<?php
ob_start();

//index.php





 include('includes/header.php');
echo'<body>';
$name='current';
include('pages/index/headermenu.php');


include('pages/index/slider.php');
include('pages/index/banner.php');
				echo'<div class="row clearfix">';
		include('pages/index/sidecontentmenu.php');
include('pages/index/products.php');
include('pages/index/bestsellers.php');
include('pages/index/banner_down.php');
include('pages/index/popularbrand.php');


include('includes/scripts.php');
include('includes/footer.php');
'</body>'
 ?>