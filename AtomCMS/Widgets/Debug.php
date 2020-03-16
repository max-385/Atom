
<div id="console-debug"> 
	
	<?php $all_vars = get_defined_vars(); ?>
	
	<pre>
<H1 style="background-color: cadetblue ">All variables:</H1>
		<?php print_r($all_vars); ?> <!-- Print array of all defined variables -->
<H1 style="background-color: cadetblue">Page array:</H1>
		<?php print_r($page); ?> <!-- Print array info (if debug is clicked)-->
	</pre>
	
</div> 