

<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<ul class="navbar-nav">
			
		<?php// nav_main($dbc, $pageid);	?>
			
			<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
		</ul>


        <ul class="navbar-nav ml-auto pr-5">


            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $user['fullname']; ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>

            <li><?php if ($debug == 1) { ?>
                    <button id="btn-debug" class="btn btn-light"><i class="fas fa-bug"></i> Debug</button>
                <?php } ?></li>

        </ul>
</nav> <!-- End of main navigation -->