<?php 
	include('config/setup.php');
?>
	
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page['title'].' | '.$site_title; ?></title>
	
	    <!-- Required meta tags -->
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

		<?php 
			include('config/js.php');
			include('config/css.php');
		?>
			
</head>
	
	
<body class="d-flex flex-column">
	<?php include (D_TEMPLATE.'/navigation.php'); //Main navigation ?>

	<div class="container">
		
		<h1><?php echo $page['header']?></h1>
		<?php echo $page['body_formatted']?>
		
		
	</div> <!-- End of Text area-->
	
	
	<?php include (D_TEMPLATE.'/footer.php'); ?>
	
	<?php if ($debug == 1) { include ('Widgets/Debug.php'); } //If debug status is 1, then "debug" button is visible and data available ?> 
	
	
</body>
</html>