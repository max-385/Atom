
<div id="console-debug"> 

	<?php $all_vars = get_defined_vars(); ?>

	<pre>
<H1>Page array:</H1>
		<?php print_r($page); ?> <!-- Print page array info (if debug is clicked)-->

<H1>URL Variables:</H1>
		<?php print_r($_GET); ?> <!-- Print array of variables provided via URL-->

<H1>HTTP cookies:</H1>
        <?php print_r($_COOKIE);?> <!-- Cookies array -->
	</pre>
	
</div> 