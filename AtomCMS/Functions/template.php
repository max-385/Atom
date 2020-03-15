<?php

function nav_main($dbc, $pageid) {
	
	$query = "SELECT * FROM pages";
	$result = mysqli_query($dbc, $query);
	
	while($nav = mysqli_fetch_assoc($result)) {			
		// Another way		echo '<li class="nav-item"><a class="nav-link" href="?page='.$nav['id'].'">'.$nav['title'].'</a></li>';
		?>
				<li class="nav-item<?php if ($pageid == $nav['id']) 
					{echo ' active';}?>"><a class="nav-link" href="?page=<?php echo $nav['id'];?>"><?php echo $nav['label'];?></a></li>
	
	
	<?php } 
	
}


?>