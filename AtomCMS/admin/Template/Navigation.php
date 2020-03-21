

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	
	<?php if ($debug == 1) { ?>
	<button id="btn-debug" class="btn btn-light"><i class="fas fa-bug"></i> Debug</button>
	<?php } ?>
	
	<div class="container">
		<ul class="navbar-nav mr-auto">
			
		<?php nav_main($dbc, $pageid);	?>
			
			<li class="nav-item"><a class="nav-link" href="#">FAQ</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>	
		</ul>
	</div>
</nav> <!-- End of main navigation -->