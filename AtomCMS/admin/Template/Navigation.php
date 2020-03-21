

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	
	<?php if ($debug == 1) { ?>
	<button id="btn-debug" class="btn btn-light"><i class="fas fa-bug"></i> Debug</button>
	<?php } ?>

		<ul class="navbar-nav mr-auto">
			
		<?php// nav_main($dbc, $pageid);	?>
			
			<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
		</ul>

</nav> <!-- End of main navigation -->