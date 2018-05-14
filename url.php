<?php include('includes/header.php');
echo'<body>';

 if(isset($_GET['products']))
	{
		$pname='current';
		include('pages/index/headermenu.php');

	include('pages/products/products.php')	;
	}
 if(isset($_GET['id1']))
	{
		$pname='current';
		include('pages/index/headermenu.php');

	include('pages/products/products.php')	;
	}
 if(isset($_GET['secondhand']))
	{
		$sname='current';
		include('pages/index/headermenu.php');

	include('pages/secondhand/sproducts.php')	;
	}
	 if(isset($_GET['contact']))
	{
		$cname='current';
		include('pages/index/headermenu.php');

	include('pages/contact/contact.php')	;
	}
'</body>';
include('includes/scripts.php');
include('includes/footer.php');
?>