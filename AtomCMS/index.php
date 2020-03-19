<?php 
	include_once('config/setup.php');
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page['title'].' | '.$site_title; ?></title>
	
	    <!-- Required meta tags -->
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

		<?php 
			include_once(rootDir('config/js.php'));
			include_once(rootDir('config/css.php'));
		?>
			
</head>
	
	
<body class="d-flex flex-column">
	<?php include_once (D_TEMPLATE.'/'.'navigation.php'); //Main navigation ?>

	<div class="container">
		
		<h1><?php echo $page['header']?></h1>
		<?php echo $page['body_formatted']?>
		
		
	</div> <!-- End of Text area-->
	
	
	<?php include_once (D_TEMPLATE.'/'.'footer.php'); // footer ?>
	
	<?php if ($debug == 1) { include ('Widgets/Debug.php'); } //If debug status is 1, then "debug" button is visible and data available ?> 
	
	
</body>
</html>